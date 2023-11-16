@extends('layouts.admin')
@section('title', 'Tất cả thương hiệu sản phẩm')
@section('content')

<form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Thêm Thương Hiệu Sản Phẩm</h1>
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
                     

                        <div class="col-md-12 text-right">

                            <button class="btn btn-info"type="submit"><i 
                                class="fas fa-save"></i>
                                Lưu[Thêm]
                            </button>

                            <a href="{{ route('brand.index') }}" class="btn bg-success">
                                <i class="fa-solid fa-rotate-left" style="color: #511f51;"></i>
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
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                        @if ($errors->has('name'))
                       <div class="text-danger"> {{  $errors->first('name') }}</div>
                        @endif 
                        </div>

                        <div class="mb-3">
                            <label>Từ khóa</label>
                            <textarea name="metakey" class="form-control">{{ old('metakey') }}</textarea>
                            @if ($errors->has('metakey'))
                       <div class="text-danger"> {{  $errors->first('metakey') }}</div>
                        @endif 
                        </div>

                        <div class="mb-3">
                            <label>Mô tả</label>
                            <textarea name="metadesc" class="form-control">{{ old('metadesc') }}</textarea>
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

                            <label>Trạng thái</label>
                        <select name="status" class="form-control">
                            <option value="1">Xuất bản</option>
                            <option value="2">Chưa xuất bản</option>
                          
                        </select>
                        </div>

                    </div>

                </div>


            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-12 text-right mt-4">

                        <button class="btn btn-info"type="submit"><i 
                            class="fas fa-save"></i>
                            Lưu[Thêm]
                        </button>

                        <a href="{{ route('brand.index') }}" class="btn bg-success">
                            <i class="fa-solid fa-rotate-left" style="color: #511f51;"></i>
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
php artisan serve