@extends('layouts.admin')
@section('title', 'Danh mục sản phẩm')
@section('content')
    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Danh mục sản phẩm</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Danh mục sản phẩm</li>
                            </ol>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="">
                            <a class=" btn btn-sm btn-primary" href="{{ route('category.create') }}"><i
                                    class="fa fa-plus"></i>Thêm</a>
                            <a class=" btn btn-sm btn-danger" href="{{ route('category.trash') }}"> <i
                                    class="fa fa-trash"></i>Thùng rác</a>
                        </div>
                    </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Danh mục sản phẩm</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            @php
                                $message = session('message');
                            @endphp
                            <div class="alert alert-{{ $message['type'] }}">
                                {{ $message['mgs'] }}
                            </div>
                        @endif
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên Danh mục</th>
                                    <th>Slug</th>
                                    <th>Chức năng</th>
                                    <th>ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $category)
                                    <td scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckIndeterminate">
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                            </label>
                                        </div>
                                    </td>
                                    <td> <img width="50px" height="50px"
                                            src="{{ asset('images/category/' . $category->image) }}" alt=""> </td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>
                                        @if ($category->status == 1)
                                            <a href="{{ route('category.status', ['category' => $category->id]) }}"
                                                {{-- đường dẫn khi nhấp vào edit có tdam số truyền vào nên phải có ->id  --}} class="btn btn-success">

                                                <i class="fa fa-toggle-on"></i>
                                            </a>
                                        @else
                                            <a href="{{ route('category.status', ['category' => $category->id]) }}"
                                                {{-- đường dẫn khi nhấp vào edit có tdam số truyền vào nên phải có ->id  --}} class="btn btn-danger">

                                                <i class="fa fa-toggle-off"></i>
                                            </a>
                                        @endif
                                        <a class="btn btn-info"
                                            href="{{ route('category.show', ['category' => $category->id]) }}"><i
                                                class="fa fa-eye"></i></a>
                                        <a class="btn btn-success"
                                            href="{{ route('category.edit', ['category' => $category->id]) }}"><i
                                                class="fa fa-edit"></i></a>
                                        <a href="{{ route('category.delete', ['category' => $category->id]) }}"
                                            class="btn btn-danger" title="delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                    <td>{{ $category->id }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
    </form>
    </section>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="d-inline">Tất cả danh mục</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header text-right">
                    <a class=" btn btn-sm btn-danger" href="{{ route('category.trash') }}"> <i
                            class="fa fa-trash"></i>Thùng rác</a>
                    <button class="btn btn-sm btn-success">
                        <i class="fa fa-save" aria-hidden="true"></i>
                        Lưu
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label>Tên danh mục (*)</label>
                                <input type="text" name="name" id="name" placeholder="Nhập tên danh mục"
                                    class="form-control" onkeydown="handle_slug(this.value);">
                            </div>
                            <div class="mb-3">
                                <label>Slug</label>
                                <input type="text" name="slug" id="slug" placeholder="Nhập slug"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Danh mục cha (*)</label>
                                <select name="parent_id" class="form-control">
                                    <option value="">None</option>
                                    <option value="1">Tên danh mục</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Hình đại diện</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Trạng thái</label>
                                <select name="status" class="form-control">
                                    <option value="1">Xuất bản</option>
                                    <option value="2">Chưa xuất bản</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:30px;">
                                            <input type="checkbox">
                                        </th>
                                        <th class="text-center" style="width:130px;">Hình ảnh</th>
                                        <th>Tên danh mục</th>
                                        <th>Tên slug</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="datarow">
                                        <td>
                                            <input type="checkbox">
                                        </td>
                                        <td>
                                            <img src="../public/images/category.jpg" alt="category.jpg">
                                        </td>
                                        <td>
                                            <div class="name">
                                                Tên danh mục
                                            </div>
                                            <div class="function_style">
                                                <a href="#">Hiện</a> |
                                                <a href="#">Chỉnh sửa</a> |
                                                <a href="../backend/category_show.html">Chi tiết</a> |
                                                <a href="#">Xoá</a>
                                            </div>
                                        </td>
                                        <td>Slug</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content -->
    </div>
@endsection
