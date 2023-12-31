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
        <td class="fw-bold text-danger">Tên Sản phẩm</td>
            <td>dfr</td>
        </tr>
        <td class="fw-bold text-danger">Slug Sản phẩm </td>
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
@section('title','Chi tiết product')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chi tiết product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Chi tiết product</li>
            </ol>
          </div>
        </div>
        <div class="d-flex justify-content-end">
          <div class="">
            <a class=" btn btn-sm btn-primary"  href="{{ route('product.index') }}"><i class="fas fa-undo-alt"></i>Trở Lại</a>
          </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Chi tiết product</h3>

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
            <td>{{ $product->id }}</td>
        </tr>
        <tr>

          <td class="fw-bold text-danger">ID danh mục</td>
          <td>{{ $product->category_id }}</td>
      </tr>
      <tr>

        <td class="fw-bold text-danger">ID thương hiệu</td>
        <td>{{ $product->brand_id }}</td>
    </tr>
        <tr>
        <td class="fw-bold text-danger">Tên Sản phẩm</td>
            <td>{{ $product->name }}</td>
        </tr>
        <td class="fw-bold text-danger">Slug Sản phẩm </td>
            <td>{{ $product->slug }}</td>
        </tr>
        <td class="fw-bold text-danger">Giá</td>
            <td>{{ $product->price }}</td> 
        </tr>
        <td class="fw-bold text-danger">Giá Sale</td>
        <td>{{ $product->price_sale }}</td> 
    </tr>
        <td class="fw-bold text-danger">số lượng</td>
        <td>{{ $product->qty }}</td> 
    </tr>
    <td class="fw-bold text-danger">chi tiết</td>
    <td>{{ $product->detail }}</td> 
</tr>
        <td class="fw-bold text-danger">Ngày Tạo</td>
            <td>{{ $product->created_at }}</td>
        </tr>
        <td class="fw-bold text-danger">Người Tạo</td>
            <td>{{ $product->created_by }}</td>
        </tr>
        <td class="fw-bold text-danger">Ngày Chỉnh sửa</td>
            <td>{{ $product->updated_at }}</td>
        </tr>
        <td class="fw-bold text-danger">Người Chỉnh sửa</td>
            <td>{{ $product->updated_by }}</td>
        </tr>
        <td class="fw-bold text-danger">Trạng Thái</td>
            <td>{{ $product->status }}</td>
        </tr>
</table>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection 