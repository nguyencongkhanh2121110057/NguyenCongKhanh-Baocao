@extends('layouts.admin')
@section('title', 'trang quản trị')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>CHI TIẾT</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Chi tiết danh mục</li>
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
                            <a href="{{ route('brand.edit',['brand'=>$row->id]) }}" class="btn bg-success">
                                <i class="fa-solid fa-edit"></i>
                                Sửa
                            </a>
                            {{-- <a href="{{ route('brand.delete',['brand'=>$row->id]) }}" class="btn bg-danger">
                                <i class="fa-solid fa-trash"></i>
                                Xóa
                            </a>
                             --}}
                            <a href="{{ route('brand.index') }}" class="btn bg-success">
                                <i class="fa-solid fa-plus"></i>
                                Quay về danh sách
                            </a>

                            
                                
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
               <table class="table table-bordered">
                    <tr>
                        <th>Tên Trường </th>
                        <th>Giá Trị</th>
                        <th></th>
                        <tr>

                            <td>Id</td>
                            <td>{{$row->id}}</td>
                        </tr>
                        <tr>

                            <td>name</td>
                            <td><?=$row->name;?></td>
                        </tr>
                        <tr>

                            <td>slug</td>
                            <td><?=$row->slug;?></td>
                        </tr>
                        <tr>

                            <td>image</td>
                            <td><?=$row->image;?></td>
                        </tr>
                        <tr>

                            <td>level</td>
                            <td><?=$row->level;?></td>
                        </tr>
                        <tr>

                            <td>delete</td>
                            <td><?=$row->delete;?></td>
                        </tr>
                        <tr>

                            <td>sort_order</td>
                            <td><?=$row->sort_order;?></td>
                        </tr>
                        <tr>

                            <td>metakey</td>
                            <td><?=$row->metakey;?></td>
                        </tr>
                        <tr>

                            <td>Id</td>
                            <td><?=$row->id;?></td>
                        </tr>
                        <tr>

                            <td>Id</td>
                            <td><?=$row->id;?></td>
                        </tr>
                        <tr>

                            <td>Id</td>
                            <td><?=$row->id;?></td>
                        </tr>
                        <tr>

                            <td>Id</td>
                            <td><?=$row->id;?></td>
                        </tr>

                    </tr>
               </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">             
                <div class="row">            
                    <div class="col-md-12 text-right mt-4">
                       
                
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

@endsection
