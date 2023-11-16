<?php

namespace App\Http\Controllers\backend;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Link;
use App\Models\Delete;
use Illuminate\Support\Str;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use Illuminate\Support\Facades\Auth;


class BrandController extends Controller
{
    public function index()
    {
        
        $list_brand = Brand::where('status','!=','0')->orderBy('created_at','desc')->get();
        return view('backend.brand.index', compact ('list_brand')) ;
    }

    
    public function create()
    {
        $list_brand = Brand::all();
        $html_parent_id = '';
        $html_parent_order='';
        foreach($list_brand as $brand){
            $html_parent_id .= '<option value="'. $brand->id . '">' . $brand->name .'</
            option>';
            $html_parent_order .= '<option value="'. ($brand->sort_order + 1) . '">Sau: ' . 
            $brand->name . '</option>';
        }
        return view('backend.brand.create',compact('html_parent_id','html_parent_order'));
    }


    // THÊM
    public function store(StoreBrandRequest $request)
    {
       $row =new Brand();//Đối tượng mới
       $row ->name =$request->name;
       $row->slug =Str::of($request->name)->slug( '-');
        //$row ->slug =Str::slug($row->name = $request->name, '-');
       $row->sort_order =$request->sort_order;
       $row_brand = Brand::find($request->parent_id); 
        if($row_brand != NULL )
        {
           $row->level =$row_brand->level + 1;
        //    General error: 1364 Field 'level' doesn't have a default value
        }
       $row ->metakey =$request->metakey;
       $row ->metadesc =$request->metadesc;
       $row ->created_by =Auth::id() ?? 1;//đăng nhập
       $row ->created_at =date('Y-m-d H:i:s'); //ngày tạoo
       $row ->status =$request->status;

       //Upload file
       $files = $request->file('image');
       if($files !=NULL){
           $extension= $files->getClientOriginalExtension();
           if(in_array($extension,['jpg','png','gif','web','jpeg'])){
               $filename =$row->slug . '.' . $extension;
              $row->image = $filename;
               $files->move(public_path('image/brand'),$filename);
                    
            }
           }
           if ($row->save())
           {
                $link = new Link();
                $link->slug =$row->slug;
                $link->table_id = $row->id;
                $link->type ='1';
                $link->save();

           }
        return redirect()->route('brand.index')->with('message',['type' => 'succcess','msg' =>'Thành Công']);
       }
    public function show( $id)
    {
        $row = Brand::find($id); //lấy ra chi tiết mẫu tin đó
    if($row == NULL)// nếu mẫu tin đó không tồn tại thì chuyển hướng trang

    {
        return redirect()->route('brand.index')->with('message',['type' => 'danger','msg' =>'Mẫu tin không tồn tại']);
   }
   else
   {
        return view('backend.brand.show',compact('row'));
   }
    }

    public function edit( $id)
   {
    $row = Brand::find($id); //lấy ra chi tiết mẫu tin đó
    if($row == NULL)// nếu mẫu tin đó không tồn tại thì chuyển hướng trang

    {
        return redirect()->route('brand.index')->with('message',['type' => 'danger','msg' =>'Mẫu tin không tồn tại']);
   }
        $list_brand = Brand::all();
        $html_parent_id = '';
        $html_parent_order='';
        foreach($list_brand as $brand){

            if($brand->id ==  $row->parent_id)
            {
                $html_parent_id .= '<option selected value="'. $brand->id . '">' . $brand->name .'</
                option>';
            }
            // thêm selected cho 2 cái
            else
            {
                $html_parent_id .= '<option   value="'. $brand->id . '">' . $brand->name .'</
            option>';
            }
            
            if($brand->sort_order ==  $row->sort_order -1)
            {
                $html_parent_order .= '<option selected value="'. ($brand->sort_order + 1) . '">Sau: ' . 
                $brand->name . '</option>';
            }
            else
            {
                $html_parent_order .= '<option value="'. ($brand->sort_order + 1) . '">Sau: ' . 
                $brand->name . '</option>';
            }
           
    }
    return view('backend.brand.edit',compact('html_parent_id','html_parent_order','row'));
    //The POST method is not supported for route admin/brand/61. Supported methods: GET, HEAD, PUT, PATCH, DELETE : bổ sung bên edit : @method"PUT"
   }
    
    public function update(StoreBrandRequest $request,  $id)
    {
        $row = Brand::find($id);
       $row ->name =$request->name;
    //    $row->slug =Str::of($request->name)->slug( '-');
    //    Attempt to assign property "slug" on null: 
        $row ->slug =Str::slug($row->name = $request->name, '-');
       $row->sort_order =$request->sort_order;
       $row_brand = Brand::find($request->parent_id); 
        if($row_brand != NULL )
        {
           $row->level =$row_brand->level + 1;
        //    General error: 1364 Field 'level' doesn't have a default value
        }
       $row ->metakey =$request->metakey;
       $row ->metadesc =$request->metadesc;

    //    sửa thành updated
       $row ->updated_by =Auth::id() ?? 1;//đăng nhập
       $row ->updated_at =date('Y-m-d H:i:s'); //ngày tạoo
       $row ->status =$request->status;

       //Upload file
       $files = $request->file('image');
       if($files !=NULL){
           $extension= $files->getClientOriginalExtension();
           if(in_array($extension,['jpg','png','gif','web','jpeg'])){
               $filename =$row->slug . '.' . $extension;
              $row->image = $filename;
               $files->move(public_path('image/brand'),$filename);
                    
            }
           }
           if ($row->save())
           {
                // $link = Link::where([['type','=',1],['table_id','=', $id]])->first();
                $link = Link::where([
                    ['type', '=', 1],
                    ['table_id', '=', $id]
                ])->first();
                $link->slug =$row->slug;
                $link->save();

           }
        return redirect()->route('brand.index')->with('message',['type' => 'succcess','msg' =>'Thành Công']);
    }

    // xóa hẳn khỏi cơ sở dữ liệu
    public function destroy($id)
    {
        // Call to a member function delete() on null:: khai báo delete là ok

        $row = Brand::find($id);
        if($row == NULL)
        {
            return redirect()->route('brand.trash')->with('message',['type' => 'danger','msg' =>'Mẫu tin không tồn tại']);
        }
       if($row->delete())
       {
            // có 2 điều kiện xóa: 
            $link = Link::where([['type','=',1],['table_id','=', $id]])->first();
            $link ->delete();
            print_r($link);
       }
       return redirect()->route('brand.trash')->with('message',['type' => 'danger','msg' =>'xóa khỏi CSDL thành công!']);
    }

    #get admin/brand/trash
    public function trash()
    {
        $list_brand = Brand::where('status','=','0')->orderBy('created_at','desc')->get();
        return view('backend.brand.trash', compact ('list_brand')) ;
    }

   
    // #get admin/brand/delete/2
    public function delete($id)
    {
        $row = Brand::find($id);
        if($row == NULL)
        {
            return redirect()->route('brand.index')->with('message',['type' => 'danger','msg' =>'Mẫu tin không tồn tại']);
       }
       $row ->updated_by =Auth::id() ?? 1;//đăng nhập
       $row ->updated_at =date('Y-m-d H:i:s'); //ngày tạoo
       $row ->status =0;
       $row->save();
       return redirect()->route('brand.index')->with('message',['type' => 'danger','msg' =>'Xóa mẫu tin vào thùng rác thành công!']);
    }



    // #get admin/brand/restore/2
    public function restore($id)
    {
        $row = Brand::find($id);
        if($row == NULL)
        {
            return redirect()->route('brand.trash')->with('message',['type' => 'danger','msg' =>'Mẫu tin không tồn tại']);
       }
       $row ->updated_by =Auth::id() ?? 1;//đăng nhập
       $row ->updated_at =date('Y-m-d H:i:s'); //ngày tạoo
       $row ->status =2;// trạng thái chưa xuất mã
       $row->save();
       return redirect()->route('brand.trash')->with('message',['type' => 'danger','msg' =>'Khôi phục mẫu tin thành công!']);
    }
    public function status($id)
    {
        $row = Brand::find($id);
        if($row == NULL)
        {
            return redirect()->route('brand.index')->with('message',['type' => 'danger','msg' =>'Mẫu tin không tồn tại']);
       }
       $row ->updated_by =Auth::id() ?? 1;//đăng nhập
       $row ->updated_at =date('Y-m-d H:i:s'); //ngày tạoo
       $row ->status =($row->status==1) ? 2 :1;// trạng thái chưa xuất mã
       $row->save();
       return redirect()->route('brand.index')->with('message',['type' => 'danger','msg' =>'Thay đổi trạng thái thành công!']);
    }
}
