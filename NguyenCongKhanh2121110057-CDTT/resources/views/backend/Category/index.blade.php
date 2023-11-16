@extends('layouts.admin')
@section('title', $title ?? 'Danh sách danh mục')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DANH SÁCH DANH MỤC</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <!-- Main content -->
                                <section class="content">
                              
                                   
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="mb-3">
                                                    <label for="name">Tên danh mục</label>
                                                    <input type="text" name="name" id="name"
                                                        value="{{ old('name') }}" class="form-control">
                                                    @if ($errors->has('name'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('name') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <label for="metakey">Từ khoá</label>
                                                    <textarea type="text" name="metakey" id="metakey" class="form-control" value="{{ old('metakey') }}"
                                                        class="form-control"></textarea>
                                                    @if ($errors->has('metakey'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('metakey') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <label for="metadesc">Mô tả</label>
                                                    <textarea type="text" name="metadesc" id="metadesc" value="{{ old('metadesc') }}" class="form-control"></textarea>
                                                    @if ($errors->has('metadesc'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('metadesc') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <label for="parent_id">Chuyên mục cha</label>
                                                    <select name="parent_id" id="parent_id" class="form-control">
                                                        <option value="0">Cấp cha</option>
                                                        {{-- {!! $html_parent_id !!} --}}
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="sort_order">Sắp sếp</label>
                                                    <select name="sort_order" id="sort_order" class="form-control">
                                                        <option value="0">Cấp cha</option>
                                                        {{-- {!! $html_sort_order!!} --}}
                                                    </select>
                                                </div>
                                            </div>
                                 
                                           
                                            
                                        </div>

                                    </div>
                                    <!-- /.card -->

                                </section>
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <button type="submit" class="btn btn-sm btn-success"><i
                                                class="fas fa-save"></i>Lưu</button>
                                                <a href="{{ route('category.trash') }}" class="btn btn-sm btn-danger"><i
                                                    class="fas fa-trash"></i>Thùng Rác</a>
                                    </div>
                                </div>

                            </form>
                            
                        </div>
                        <div class="col-md-8">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:30px;">
                                            <input type="checkbox">
                                        </th>
                                      
                                        <th>Tên danh mục</th>
                                        <th>Tên slug</th>
                                        <th>Ngày tạo</th>
                                        <th>Chức năng</th>
                                        <th>id</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($list as $row)
                                        <tr class="datarow">
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                        
                                            <td>
                                                <div class="name">
                                                    {{ $row->name }}
                                                </div>
                                                <div class="function_style">
                                                    <a href="#">Hiện</a> |
                                                    <a href="{{ route('category.edit', ['category' => $row->id]) }}">Chỉnh
                                                        sửa</a> |
                                                    <a href="{{ route('category.show', ['category' => $row->id]) }}">Chi
                                                        tiết</a> |
                                                    <a
                                                        href="{{ route('category.delete', ['category' => $row->id]) }}">Xoá</a>
                                                </div>
                                            </td>
                                            <td>Slug</td>
                                        </tr>
                                    @endforeach --}}

                                    @foreach ($list as $row)
                                    <tr>
                                        <td class="text-center">
                                            <input type="checkbox" name="checkId[]" value="{{ $row->id }}">
                                        </td>
                                        <td
                                            class="text-center">{{ $row->name }}</td>
                                        <td class="text-center">
                                            {{ $row->slug }}</td>
                                        <td
                                            class="text-center">{{ $row->created_at }}</td>
                                        <td class="text-center">
                                            @if ($row->status == 1)
                                                <a href="{{ route('category.status', ['category' => $row->id]) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="fas fa-toggle-on"></i></a>
                                            @else
                                                <a href="{{ route('category.status', ['category' => $row->id]) }}"
                                                    class="btn btn-sm btn-danger">
                                                    <i class="fas fa-toggle-off"></i></a>
                                            @endif
                                            <a href="{{ route('category.edit', ['category' => $row->id]) }}"
                                                class="btn btn-sm btn-info"> <i class="fas fa-wrench"></i></a>
                                            <a href="{{ route('category.show', ['category' => $row->id]) }}"
                                                class="btn btn-sm btn-danger "><i class="far fa-eye"></i></a>
                                            <a href="{{ route('category.delete', ['category' => $row->id]) }}"
                                                class="btn btn-sm btn-danger "><i class="fas fa-trash"></i></a>
                                        </td>
                                        <td class="text-center">{{ $row->id }}</td>
                                    </tr>
        @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
