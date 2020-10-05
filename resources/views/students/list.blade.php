@extends('admin-layout.master')

@section('content')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Danh sách sinh viên</h1>
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
             <table class="table">
       <thead>
           
           <th>Name</th>
           <th>Phone</th>
           <th>Age</th>
           <th>Gender</th>
           <th>Address</th>
           <th>
               <button type="button" class="btn btn-outline-success"> Add </button>
           </th>
       </thead>
       <tbody>
           @foreach($students as $listItem)
          <tr>
              
              <td>{{$listItem->name}}</td>
              <td>{{$listItem->phone}}</td>
              <td>{{$listItem->age}}</td>
              <td>
                    @if($listItem->gender == 0)
                    Nữ
                    @elseif($listItem->gender == 1)
                    Nam
                    @else
                    Khác
                    @endif
              </td>
              <td>{{$listItem->address}}</td>
              <td>
                  <button type="button" class="btn btn-outline-primary">Edit</button>
                  <button type="button" class="btn btn-outline-danger">Delete</button>
              </td>
             
          </tr>
          @endforeach
       </tbody>
   </table>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
</div>

  
 
 @endsection
