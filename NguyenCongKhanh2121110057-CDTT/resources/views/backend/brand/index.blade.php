@extends('layouts.admin')
@section('title', 'Thương hiệu')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="d-inline">Tất cả thương hiệu</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
            
                            <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label>Tên danh mục</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                                    @if ($errors->has('name'))
                                        <div class="text-danger"> {{ $errors->first('name') }}</div>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label>Từ khóa</label>
                                    <textarea name="metakey" class="form-control">{{ old('metakey') }}</textarea>
                                    @if ($errors->has('metakey'))
                                        <div class="text-danger"> {{ $errors->first('metakey') }}</div>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label>Mô tả</label>
                                    <textarea name="metadesc" class="form-control">{{ old('metadesc') }}</textarea>
                                    @if ($errors->has('metadesc'))
                                        <div class="text-danger"> {{ $errors->first('metadesc') }}</div>
                                    @endif
                                </div>
                                <div class="mb-3">

                                    <label>Hình đại diện</label>
                                    <input name="image" type="file" class="form-control">
                                </div>
                                <div class="mb-3">

                                    <label>Danh mục cha</label>
                                    <select name="parent_id" class="form-control">
                                        <option value="0">Danh mục cha</option>
                                        {{-- {!! $html_parent_id !!} --}}
                                    </select>
                                </div>
                                <div class="mb-3">

                                    <label>Sắp xếp</label>
                                    <select name="sort_order" class="form-control">
                                        <option value="0">Chọn ví trí</option>
                                        {{-- {!! $html_parent_order !!} --}}
                                    </select>
                                </div>
                                <div class="mb-3">

                                 <label>Trạng thái</label>
                             <select name="status" class="form-control">
                                 <option value="1">Xuất bản</option>
                                 <option value="2">Chưa xuất bản</option>
                               
                             </select>
                             </div>
                                <button class="btn btn-info"type="submit"><i class="fas fa-save"></i>
                                    Lưu[Thêm]
                                </button>
                                <a href="{{ route('brand.trash') }}" class="btn bg-success"><i class="fa-solid fa-trash-can" style="color: #511f1f;"></i>Thùng Rác </a>
                            </form>

                        </div>
                        <div class="col-md-8">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:30px;">
                                            <input type="checkbox">
                                        </th>
                                        <th class="text-center" style="width:130px;">Hình ảnh</th>
                                        <th>Tên thương hiệu</th>
                                        <th>chức năng</th>
                                        <th>id</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($list_brand as $brand)
                                        <tr class="datarow">
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <td>
                                                <img class="img-fluid" src="{{ asset('image/brand/' . $brand->image) }}"
                                                    alt="{{ $brand->image }}">
                                            </td>
                                            <td>
                                                <div class="name">
                                                    {{ $brand->name }}
                                                </div>
                                                <div class="function_style">
                                                    <a href="#">Hiện</a> |
                                                    <a href="{{ route('brand.edit', ['brand' => $brand->id]) }}">Chỉnh
                                                        sửa</a> |
                                                    <a href="{{ route('brand.show', ['brand' => $brand->id]) }}">Chi
                                                        tiết</a> |
                                                    <a href="{{ route('brand.delete', ['brand' => $brand->id]) }}">Xoá</a>
                                                </div>
                                            </td>
                                            <td>Slug</td>
                                        </tr>
                                    @endforeach --}}
                                    @foreach ($list_brand as $brand)
                                    <tr>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <img class="img-fluid" src="{{ asset('image/brand/' . $brand->image) }}"
                                                alt="{{ $brand->image }}">
                        
                                        </td>
                                        <td class="text-center">{{ $brand->name }}</td>
                                    
                                        <td class="text-center">
                                            @if ($brand->status == 1)
                                                <a href="{{ route('brand.status', ['brand' => $brand->id]) }}"
                                                    class="btn btn-sm btn-success">
                        
                                                    <i class="fa-solid fa-toggle-on"></i>
                                                </a>
                                            @else
                                                <a href="{{ route('brand.status', ['brand' => $brand->id]) }}"
                                                 class="btn btn-sm btn-danger">
                        
                                                    <i class="fa-solid fa-toggle-off"></i>
                                                </a>
                                            @endif
                        
                                            <a href="{{ route('brand.edit', ['brand' => $brand->id]) }}" {{-- đường dẫn khi nhấp vào edit có tham số truyền vào nên phải có ->id  --}}
                                                class="btn btn-sm btn-info">
                        
                                                <i class="fa-solid fa-edit"></i>
                                            </a>
                                            <a href="{{ route('brand.show', ['brand' => $brand->id]) }}" {{-- đường dẫn khi nhấp vào edit có tham số truyền vào nên phải có ->id  --}}
                                                class="btn btn-sm btn-success">
                                                <i class="fa-solid fa-eye"></i>
                        
                                            </a>
                                            <a href="{{ route('brand.delete', ['brand' => $brand->id]) }}"
                                                class="btn btn-sm btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                        <td class="text-center">{{ $brand->id }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
