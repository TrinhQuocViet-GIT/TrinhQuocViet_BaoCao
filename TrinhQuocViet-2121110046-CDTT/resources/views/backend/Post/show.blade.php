{{-- <table class="table table-bordered">
    <thead>
        <tr class="text-bg-success">
       
            <th class="text-center text-danger">Tên Trường</th>
            <th class="text-center text-danger">Giá Trị</th>
        </tr>
    </thead>
        <tr>

            <td class="fw-bold text-danger">ID</td>
            <td>ádad</td>
        </tr>
        <tr>
        <td class="fw-bold text-danger">Tên Bài viết</td>
            <td>dfr</td>
        </tr>
        <td class="fw-bold text-danger">Slug Bài viết </td>
            <td>sfsd</td>
        </tr>
        <td class="fw-bold text-danger">Thứ Tự</td>
            <td>sdfs</td> 
        </tr>
        <td class="fw-bold text-danger">Hình Ảnh</td>
            <td>sdfsd</td>
        </tr>
        <td class="fw-bold text-danger">Từ Khóa SEO</td>
            <td>sdfsd</td>
        </tr>
        <td class="fw-bold text-danger">Mô Tả SEO</td>
            <td>ọi</td>
        </tr>
        <td class="fw-bold text-danger">Ngày Tạo</td>
            <td>DÁ</td>
        </tr>
        <td class="fw-bold text-danger">Người Tạo</td>
            <td>áda</td>
        </tr>
        <td class="fw-bold text-danger">Ngày Chỉnh sửa</td>
            <td>ádas</td>
        </tr>
        <td class="fw-bold text-danger">Người Chỉnh sửa</td>
            <td>ádas</td>
        </tr>
        <td class="fw-bold text-danger">Trạng Thái</td>
            <td>ádasd</td>
        </tr>
</table> --}}

@extends('layouts.admin')
@section('title','Chi tiết sản phẩm')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chi tiết sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Chi tiết sản phẩm</li>
            </ol>
          </div>
        </div>
        <div class="d-flex justify-content-end">
          <div class="">
            <a class=" btn btn-sm btn-primary"  href="{{ route('post.index') }}"><i class="fas fa-undo-alt"></i>Trở Lại</a>
            <a class=" btn btn-sm btn-danger" href=""> <i class="fa fa-trash"></i>Xóa</a>
          </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Chi tiết Bài viết</h3>

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
            <td>{{ $post->id }}</td>
        </tr>
        <tr>
            <td class="fw-bold text-danger">ID Topic</td>
            <td>{{ $post->topic_id }}</td>
        </tr>
        <tr>
        <td class="fw-bold text-danger">Tên Bài viết</td>
            <td>{{ $post->title }}</td>
        </tr>
        <td class="fw-bold text-danger">Slug Bài viết </td>
            <td>{{ $post->slug }}</td>
        </tr>
        <td class="fw-bold text-danger">chi tiết bài viết</td>
            <td>{{ $post->detail }}</td> 
        </tr>
        <td class="fw-bold text-danger">Hình Ảnh</td>
            <td><img width="50px" height="50px" src="{{ asset('images/post/' . $post->image) }}" alt=""></td>
        </tr>
        <td class="fw-bold text-danger">Kiểu</td>
        <td>{{ $post->type }}</td>
    </tr>
        <td class="fw-bold text-danger">Từ Khóa SEO</td>
            <td>{{ $post->metakey }}</td>
        </tr>
        <td class="fw-bold text-danger">Mô Tả SEO</td>
            <td>{{ $post->metadesc }}</td>
        </tr>
        <td class="fw-bold text-danger">Ngày Tạo</td>
            <td>{{ $post->created_at }}</td>
        </tr>
        <td class="fw-bold text-danger">Người Tạo</td>
            <td>{{ $post->created_by }}</td>
        </tr>
        <td class="fw-bold text-danger">Ngày Chỉnh sửa</td>
            <td>{{ $post->updated_at }}</td>
        </tr>
        <td class="fw-bold text-danger">Người Chỉnh sửa</td>
            <td>{{ $post->updated_by }}</td>
        </tr>
        <td class="fw-bold text-danger">Trạng Thái</td>
            <td>{{ $post->status }}</td>
        </tr>
</table>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection 