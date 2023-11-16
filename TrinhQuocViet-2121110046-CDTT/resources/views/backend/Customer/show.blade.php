

@extends('layouts.admin')
@section('title','Chi tiết customer')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chi tiết customer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Chi tiết customer</li>
            </ol>
          </div>
        </div>
        <div class="d-flex justify-content-end">
          <div class="">
            <a class=" btn btn-sm btn-primary"  href="{{ route('customer.index') }}"><i class="fas fa-undo-alt"></i>Trở Lại</a>
          </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Chi tiết customer</h3>

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
            <td>{{ $customer->id }}</td>
        </tr>
        <td class="fw-bold text-danger">Hình Ảnh</td>
        <td><img width="50px" height="50px" src="{{ asset('images/customer/' . $customer->image) }}" alt=""></td>
    </tr>
        <tr>
        <td class="fw-bold text-danger">Tên customer</td>
            <td>{{ $customer->name }}</td>
        </tr>
        <td class="fw-bold text-danger">email</td>
            <td>{{ $customer->email }}</td> 
        </tr>
        <td class="fw-bold text-danger">phone</td>
        <td>{{ $customer->phone }}</td> 
    </tr>
        <td class="fw-bold text-danger">Tên tài khoản</td>
        <td>{{ $customer->username }}</td> 
    </tr>
    <td class="fw-bold text-danger">password</td>
    <td>{{ $customer->password}}</td> 
</tr>
<td class="fw-bold text-danger">address</td>
<td>{{ $customer->address}}</td> 
</tr>
<td class="fw-bold text-danger">Quyền</td>
<td>{{ $customer->roles}}</td> 
</tr>
        <td class="fw-bold text-danger">Ngày Tạo</td>
            <td>{{ $customer->created_at }}</td>
        </tr>
        <td class="fw-bold text-danger">Người Tạo</td>
            <td>{{ $customer->created_by }}</td>
        </tr>
        <td class="fw-bold text-danger">Ngày Chỉnh sửa</td>
            <td>{{ $customer->updated_at }}</td>
        </tr>
        <td class="fw-bold text-danger">Người Chỉnh sửa</td>
            <td>{{ $customer->updated_by }}</td>
        </tr>
        <td class="fw-bold text-danger">Trạng Thái</td>
            <td>{{ $customer->status }}</td>
        </tr>
</table>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection 