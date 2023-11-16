<?php
namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Link;



use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {                       
        $title ='Danh sách danh mục';                                                                                                             #$title...
        $list = Category ::where('status','!=','0')->orderBy('id','desc')->get();                               //where                                                        #orwhere la them 1 dieu kien nua {get lay nhieu mau tin} ['tenbien' => $list,'tieude' => $title]  ,compact($list)
        return view('backend.category.index',compact('list','title'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title ='Tạo';
        $list = Category ::where('status','<>','0')->orderBy('created_at','desc')->get();  
        $html_parent_id = '';
        $html_sort_order = '';
        foreach($list as $item)
        {
            $html_parent_id .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
            $html_sort_order .= "<option value='" . ($item->sort_order + 1) . "'>Sau:" . $item->name . "</option>";        }
        return view("backend.category.create", compact('html_parent_id','html_sort_order', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $row = new Category();
        $row ->name = $request->name;
        $row ->slug = Str::of($request->name)->slug('-');;
        $row->parent_id = $request->parent_id;
        $row ->sort_order = $request->sort_order;
        //$row ->level = $request->level;
        //$row ->image = $request->image;
        $row ->metakey = $request->metakey;
        $row->metadesc=$request->metadesc;
        $row->created_at=date('Y-m-d H:i:s');
        $row->created_by= 1;
        // if ($row->status == 2) {
        //     $row->products()->update([
        //         'status' => 2,
        //         'updated_by' => Auth::user()->id
        //     ]);
        //     $row->menus()->update([
        //         'status' => 2,
        //         'updated_by' => Auth::user()->id
        //     ]);
        // }        
        $file = $request->file('image');
        if($file!= NULL)
        {
            var_dump('file');
             $extention = $file ->getClientOriginalExtension();
             if(in_array($extention, ['png', 'jpg']))
             {
                $fileName = $row ->slug. '.'.$extention;
                $file->move(public_path('images/category'),$fileName);
                $row->image = $fileName;
                //$category ->image = $request->image;
             }
        }

        if ($row->save()) {
            $link = new Link();
            $link->slug = $row->slug;
            $link->table_id = $row->id;
            $link->type = 'category';
            $link->save();
            return redirect()->route('category.index')->with('message', ['type' => 'success', 'mgs' => 'Thêm sản phẩm thành công']);
        } else {
            return redirect()->route('category.index')->with('message', ['type' => 'danger', 'mgs' => 'Thêm sản phẩm không thành công']);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $row = Category::find($id);                                                                                           //$row1=Category::where([['id','=',$id],['status','!=',0]])..
        if($row == NULL)
        {
            return redirect()->route('category.index')->with('message',['type' => 'danger', 'mgs' => 'Mẫu tin không tồn tại']);
        }
        $title = "Chi tiết mãu tin";
        return view('backend.category.show',compact('row','title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $row = Category::find($id);                                                                                           //$row1=Category::where([['id','=',$id],['status','!=',0]])..
        if($row == NULL)
        {
            return redirect()->route('category.index')->with('message',['type' => 'danger', 'mgs' => 'Mẫu tin không tồn tại']);
        }
        $list = Category ::where('status','<>','0')->orderBy('created_at','desc')->get();  
        $html_parent_id = '';
        $html_sort_order = '';
        foreach($list as $item)
        {
            if($item->id == $row->parent_id)
            {
            $html_parent_id .= "<option selected value ='" . $item->id ."'>" .$item ->name . "</option>";
            }
            else
            {
                $html_parent_id .= "<option value ='" . $item->id ."'>" .$item ->name . "</option>";
            }
            if($item->sort_order == $row->sort_order)
            {
                $html_sort_order .= "<option selected value =' " . ($item->sort_order + 1) ."'>" .$item ->name . "</option>";            
            }
            else
            {
            $html_sort_order .= "<option value =' " . ($item->sort_order + 1) ."'>" .$item ->name . "</option>";
            }
        }
        $title = "Cập nhập mẫu tin";
        return view('backend.category.edit',compact('row','title','html_sort_order','html_parent_id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        $row = Category::find($id);                                                                                           //$row1=Category::where([['id','=',$id],['status','!=',0]])..
        if($row == NULL)
        {
            return redirect()->route('category.index')->with('message',['type' => 'danger', 'mgs' => 'Mẫu tin không tồn tại']);
        }
        $row ->name = $request->name;
        $row ->slug = Str::of($request->name)->slug('-');;
        $row ->parent_id = $request->parent_id;
        $row ->sort_order = $request->sort_order;
        //$row ->level = $request->level;       
        //$row ->image = $request->image;
        $row ->metakey = $request->metakey;
        $row->metadesc=$request->metadesc;
        $row->updated_at=date('Y-m-d H:i:s');
        $row->updated_by=1;
        if ($row->status == 2) {
            $row->products()->update([
                'status' => 2,
                // 'updated_by' => Auth::user()->id
            ]);
            $row->menus()->update([
                'status' => 2,
                // 'updated_by' => Auth::user()->id
            ]);
        }
        
        $file = $request->file('image');
        if($file!= NULL)
        {
            var_dump('file');
             $extention = $file ->getClientOriginalExtension();
             if(in_array($extention, ['png', 'jpg']))
             {
                $fileName = $row ->slug. '.'.$extention;
                $file->move(public_path('images/category'),$fileName);
                $row->image = $fileName;
                //$category ->image = $request->image;
             }
        }


        if ($row->save()) {
            $link = Link::where([['type', '=', 'category'], ['table_id', '=', $id]])->first();

            return redirect()->route('category.index')->with('message', ['type' => 'success', 'mgs' => 'Cập nhật sản phẩm thành công']);
        } else {
            return redirect()->route('category.index')->with('message', ['type' => 'danger', 'mgs' => 'Thêm sản phẩm không thành công']);
        }    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $row = Category::find($id);
        $path_dir = "images/category/";
        $path_image_delete = public_path($path_dir . $row->image);
        if ($row == null) {
            return redirect()->route('category.trash')->with('message', ['type' => 'danger', 'mgs' => 'Mẫu tin không tồn tại']);
        }
        $row->products()->update([
            'status' => 0,
            // 'updated_by' => Auth::user()->id
        ]);
        $row->menus()->delete();

        if ($row->delete()) {
            if (File::exists($path_image_delete)) {
                File::delete($path_image_delete);
            }
            $link = Link::where(
                [['type', '=', 'category'], ['table_id', '=', $id]]
            )->first();
            $link->delete();
            return redirect()->route('category.trash')->with('message', ['type' => 'success', 'mgs' => 'Xóa sản phẩm thành công']);
        } else {
            return redirect()->route('category.trash')->with('message', ['type' => 'danger', 'mgs' => 'Xóa sản phẩm không thành công']);
        }
    }


    public function trash()
    {                                                                                                        
        $list = Category::where('status','=','0')->orderBy('created_at','asc')->get();                                                                                   #orwhere la them 1 dieu kien nua {get lay nhieu mau tin} ['tenbien' => $list,'tieude' => $title]  ,compact($list)
        return view('backend.category.trash',compact('list'));
    }

    public function status($id, Request $request)
    {
        $row = Category::find($id);
        if ($row == null) {
            return redirect()->route('category.index')->with('message', ['type' => 'danger', 'mgs' => 'Mẫu tin không tồn tại']);
        } else {
            $row->status = ($row->status == 1) ? 2 : 1;
            if ($row->status == 2) {
                $row->products()->update([
                    'status' => 2,
                    // 'updated_by' => Auth::user()->id
                ]);
                $row->menus()->update([
                    'status' => 2,
                    // 'updated_by' => Auth::user()->id
                ]);
            }
            $row->updated_at = date('Y-m-d H:i:s');
            // $row->updated_by =  Auth::user()->id;
            $row->save();
            return redirect()->route('category.index')->with('message', ['type' => 'success', 'mgs' => 'Thay đổi trạng thái thành công']);
        }
    }

    public function delete($id)
    {
        $row = Category::find($id);
        if($row == NULL)
        {
            return redirect()->route('category.index')->with('message',['type' => 'danger', 'mgs' => 'Mẫu tin không tồn tại']);
        }

        $row->updated_at = date('Y-m-d H:i:s');
        $row->updated_by= 1;
        $row->status=0;

        $row ->save();
        return redirect()->route('category.index')->with('message', ['type' => 'success', 'mgs' => 'Xoá vào thùng rác thành công']);
    }
    

    public function restore($id)
    {
    $row = Category::find($id);
        if($row == NULL)
        {
            return redirect()->route('category.index')->with('message',['type' => 'danger', 'mgs' => 'Mẫu tin không tồn tại']);
        }
        $row->updated_at = date('Y-m-d H:i:s');
        $row->updated_by= 1;
        $row->status=($row ->status == 1)? 2 : 1;

        $row ->save();
        return redirect()->route('category.index')->with('message', ['type' => 'success', 'mgs' => 'Khôi phục thành công']);
    }
}
?>