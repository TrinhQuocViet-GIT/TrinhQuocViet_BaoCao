@extends('layouts.admin')
@section('title', 'Chi tiết danh mục')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Chi tiết danh mục</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Chi tiết danh mục</li>
                        </ol>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="">
                        <a class=" btn btn-sm btn-primary" href="{{ route('category.index') }}"><i
                                class="fas fa-undo-alt"></i>Trở Lại</a>
                        <a class=" btn btn-sm btn-danger" href=""> <i class="fa fa-trash"></i>Xóa</a>
                    </div>
                </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Chi tiết danh mục</h3>

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
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-bg-success">
                                <th class="text-center text-danger">Tên Trường</th>
                                <th class="text-center text-danger">Giá Trị</th>
                            </tr>
                        </thead>
                        <tr>
                            <td class="fw-bold text-danger">ID</td>
                            <td>{{ optional($category)->id }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-danger">Tên Danh mục</td>
                            <td>{{ optional($category)->name }}</td>
                        </tr>
                        <td class="fw-bold text-danger">Slug Danh mục </td>
                        <td>{{ optional($category)->slug }}</td>
                        </tr>
                        <td class="fw-bold text-danger">Thứ Tự</td>
                        <td>{{ optional($category)->sort_order }}</td>
                        </tr>
                        <td class="fw-bold text-danger">ID Cha</td>
                        <td>{{ optional($category)->parent_id }}</td>
                        </tr>
                        <td class="fw-bold text-danger">Hình Ảnh</td>
                        <td><img width="50px" height="50px"
                                src="{{ asset('images/category/' . optional($category)->image) }}" alt=""></td>
                        </tr>
                        <td class="fw-bold text-danger">Từ Khóa SEO</td>
                        <td>{{ optional($category)->metakey }}</td>
                        </tr>
                        <td class="fw-bold text-danger">Mô Tả SEO</td>
                        <td>{{ optional($category)->metadesc }}</td>
                        </tr>
                        <td class="fw-bold text-danger">Ngày Tạo</td>
                        <td>{{ optional($category)->created_at }}</td>
                        </tr>
                        <td class="fw-bold text-danger">Người Tạo</td>
                        <td>{{ optional($category)->created_by }}</td>
                        </tr>
                        <td class="fw-bold text-danger">Ngày Chỉnh sửa</td>
                        <td>{{ optional($category)->updated_at }}</td>
                        </tr>
                        <td class="fw-bold text-danger">Người Chỉnh sửa</td>
                        <td>{{ optional($category)->updated_by }}</td>
                        </tr>
                        <td class="fw-bold text-danger">Trạng Thái</td>
                        <td>{{ optional($category)->status }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection 
