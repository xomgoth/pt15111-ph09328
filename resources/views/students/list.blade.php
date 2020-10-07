@extends('admin-layout.master')
@section('title','Danh sách sinh viên')

@section('content')

    <table class="table">
       <thead>
           
           <th>Name</th>
           <th>Phone</th>
           <th>Age</th>
           <th>Gender</th>
           <th>Address</th>
           <th>
              <a href="{{route('students.create')}}">
                    <button type="button" class="btn btn-outline-success"> Add </button>
              </a>
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

                <a href="{{route('students.edit', $listItem->id)}}">
                <button type="submit" class="btn btn-outline-warning">Edit</button>
                </a>
              </td>
              <td> 
                  <form action="{{route('students.destroy',$listItem->id)}}" method="POST">
                          @csrf
                          <input  type="hidden" name="_method" value="DELETE">
                          <button type="submit" class="btn btn-outline-danger">Delete</button>
                  </form>
                
               
                </td>
             
             
          </tr>
          @endforeach
       </tbody>
    </table>

@endsection
