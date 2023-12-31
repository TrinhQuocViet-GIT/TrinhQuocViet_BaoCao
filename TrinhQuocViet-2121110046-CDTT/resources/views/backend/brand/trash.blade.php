@extends('layouts.admin')
@section('title', 'Thùng rác thương hiệu')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Thùng rác thương hiệu</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Thùng rác thương hiệu</li>
                        </ol>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="">
                        <a class=" btn btn-sm btn-primary" href="{{ route('brand.index') }}"><i
                                class="fas fa-undo-alt"></i>Trở lại</a>

                    </div>
                </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Thùng rác thương hiệu</h3>

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
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Hình ảnh</th>
                                <th>Tên thương hiệu</th>

                                <th>Chức năng</th>
                                <th>ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $brand)
                                <tr>
                                    <td scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckIndeterminate">
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                            </label>
                                        </div>
                                    </td>
                                    <td> <img width="50px" height="50px" src="{{ $brand->image }}" alt=""> </td>
                                    <td>{{ $brand->name }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('brand.show', ['brand' => $brand->id]) }}"><i
                                                class="fa fa-eye"></i></a>
                                        <a class="btn btn-primary"
                                            href="{{ route('brand.restore', ['brand' => $brand->id]) }}"><i
                                                class="fa fa-undo-alt"></i></a>
                                        <a href="{{ route('brand.destroys', ['brand' => $brand->id]) }}"
                                            class="btn btn-danger" title="Xóa Khỏi CSDL">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                    <td>{{ $brand->id }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
