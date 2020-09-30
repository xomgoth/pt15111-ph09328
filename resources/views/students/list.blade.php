@extends('layout.master')
<!-- kế thừa view master  -->
@section('title','Danh sách học sinh')
<!-- thay đổi nội dung -->
@section('header','Danh sách học sinh')
<!-- thay đổi nội dung phức tạp -->

@section('content')
  <div class="container">

   <table class="table">
       <thead>
           
           <th>Name</th>
           <th>Phone</th>
           <th>Age</th>
           <th>Gender</th>
           <th>Address</th>
           <th>
               <button type="button" class="btn btn-outline-success"> Them </button>
           </th>
       </thead>
       <tbody>
           @foreach($listStudents as $listItem)
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
                  <button type="button" class="btn btn-outline-primary">Sua</button>
                  <button type="button" class="btn btn-outline-danger">Sua</button>
              </td>
             
          </tr>
          @endforeach
       </tbody>
   </table>
  </div>
 @endsection
 @section('footer','footer students')