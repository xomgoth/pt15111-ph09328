@extends('admin-layout.master')

@section('content')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Chi tiet sinh vien</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
        
Tên:{{$students->name}}
<br>
Số điện thoại: {{$students->phone}}
<br>
Tuổi:{{$students->age}}
<br>
Giới tính:@if(($students->gender)==1)
            Nam
            @elseif(($students->gender)==2)
            Nữ
            @else
            Không hiển thị
            @endif
            <br>
Địa chỉ:{{$students->address}}
            
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
</div>

  
 
 @endsection