@extends('layouts.admin')
@section('title', 'Trang quản trị')
@section('content')
 

{{-- chạy về update --}}
<form action="{{ route('brand.update',['brand'=>$row->id]) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Cập Nhật Danh Mục</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Tất cả danh mục</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-danger"type="submit"><i class="fa-sharp fa-solid fa-calendar-xmark"></i>
                                Xóa
                            </button>
                        </div>

                        <div class="col-md-12 text-right">

                            <button name="THEM" class="btn btn-danger" type="submit"><i 
                                class="fas fa-save"></i>
                                Lưu[Cập Nhật]
                            </button>

                            <a href="{{ route('brand.index') }}" class="btn bg-success">
                                <i class="fa-solid fa-plus"></i>
                                Quay về danh sách
                            </a>

                            
                                
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9">
                        <div class="mb-3">
                            <label>Tên danh mục</label>
                            <input type="text" name="name" value="{{ old('name',$row->name) }}" class="form-control">
                        @if ($errors->has('name'))
                       <div class="text-danger"> {{  $errors->first('name') }}</div>
                        @endif 
                        </div>

                        <div class="mb-3">
                            <label>Từ khóa</label>
                            <textarea name="metakey" class="form-control">{{ old('metakey',$row->metakey) }}</textarea>
                            @if ($errors->has('metakey'))
                       <div class="text-danger"> {{  $errors->first('metakey') }}</div>
                        @endif 
                        </div>

                        <div class="mb-3">
                            <label>Mô tả</label>
                            <textarea name="metadesc" class="form-control">{{ old('metadesc',$row->metadesc) }}</textarea>
                            @if ($errors->has('metadesc'))
                       <div class="text-danger"> {{  $errors->first('metadesc') }}</div>
                        @endif 
                        </div>


                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">

                            <label>Danh mục cha</label>
                            <select name="parent_id" class="form-control">
                            <option value="0">Danh mục cha</option>
                                {!! $html_parent_id !!}

                        </select>
                        </div>
                        <div class="mb-3">

                            <label>Sắp xếp</label>
                            <select name="sort_order" class="form-control">
                            <option value="0">Chọn ví trí</option>
                            {!! $html_parent_order !!}</select>
                        </div>
                        <div class="mb-3">

                            <label>Hình đại diện</label> 
                            <input name="image" type="file" class="form-control">
                        </div>
                        <div class="mb-3">

                            <label>Trạng  thái</label>
                        <select name="status" class="form-control">
                            <option value="1" <?=($row->status==1)?'selected':' '; ?>> Xuất bản </option>
                            <option value="2" <?=($row->status==2)?'selected':''; ?>> Chưa xuất bản </option>
                            {{-- nút tắt thì ấn edit ra chưa xuất bản,, còn nút bật on thì ấn edit ra xuất bản --}}
                          
                        </select>
                        </div>

                    </div>

                </div>


            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-12 text-right mt-4">

                        <button name="THEM" class="btn btn-danger"type="submit"><i 
                            class="fas fa-save"></i>
                            Lưu[Cập Nhật]
                        </button>

                        <a href="{{ route('brand.index') }}" class="btn bg-success">
                            <i class="fa-solid fa-plus"></i>
                            Quay về danh sách
                        </a>
      
                    </div>
                </div>
            </div>
            <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
    </div>
</form>

@endsection
