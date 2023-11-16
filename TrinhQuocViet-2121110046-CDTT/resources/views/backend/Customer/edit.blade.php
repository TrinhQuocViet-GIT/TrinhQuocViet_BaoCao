
@extends('layouts.admin')
@section('title','Cập nhật customer')
@section('content')
<form action="{{ route("customer.update",['customer'=>$customer->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cập nhật customer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cập nhật customer</li>
            </ol>
          </div>
        </div>
        <div class="d-flex justify-content-end">
          <div class="">
            <button type="submit">Lưu</button>  
               <a href="{{ route('customer.index') }}" class="btn bg-success">
                        <i class="fas fa-undo-alt"></i> Quay về danh sách </a>

          </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Cập nhật customer</h3>

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
          <div class="row">
              <div class="col-9">
                  <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Tên</label>
                      <input name="name" type="text" class="form-control" id="exampleFormControlInput1" value="{{ old('name',$customer->name) }}" >
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">email</label>
                    <input name="email" type="email" class="form-control" id="exampleFormControlInput1" value="{{ old('email',$customer->email) }}" >
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">phone</label>
                  <input name="phone" type="text" class="form-control" id="exampleFormControlInput1" value="{{ old('phone',$customer->phone) }}" >
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tên Tài Khoản</label>
                <input name="username" type="text" class="form-control" id="exampleFormControlInput1" value="{{ old('username',$customer->username) }}" >
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Mật khẩu</label>
              <input name="password" type="password" class="form-control" id="exampleFormControlInput1" value="{{ old('password',$customer->password) }}" >
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Địa chỉ</label>
            <input name="address" type="text" class="form-control" id="exampleFormControlInput1"  value="{{ old('address',$customer->address) }}">
        </div>
                 
              </div>
              <div class="col-3">
                <div class="mb-3">
                  <label for="image">Hình ảnh</label>
                  <input type="file" name="image" value="{{old('image')}}" id="image" class="form-control" placeholder="Thêm hình ảnh">

              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea2" class="form-label">roles</label>
                <select name="roles" class="form-control" id="select1" aria-label="Default select example">
                  <div>
                    <option selected value="0">Người dùng</option>
                    <option value="1">ADMIN</option>
                </div>
                </select>
            </div>
                  <div class="mb-3">
                      <label for="exampleFormControlTextarea2" class="form-label">Trạng thái</label>
                      <select name="status" class="form-select" id="select1" aria-label="Default select example">
                          <div>
                              <option selected></option>
                              <option value="1">Hien</option>
                              <option value="2">tat</option>
                          </div>
                      </select>
                  </div>
              </div>
          </div>
      </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
</form>
@endsection