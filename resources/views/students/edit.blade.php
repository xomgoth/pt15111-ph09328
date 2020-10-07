@extends('admin-layout.master')
@section('title','Sửa sinh viên')
@section('header','Sửa Sinh Viên')
@section('content')

<div class="container">
<form action="{{route('students.update',$student->id)}}" method="POST" class="form-group">
 @csrf
        <input type="hidden" name="_method" value="PUT">
            <div>
                <label for="name">Name</label>
                <input id="name" type="text" name="name" value="{{$student->name}}" class="form-control">
            </div>

            <div>
                <label for="phone">Phone</label>
                <input id="phone" type="text" name="phone" value="{{$student->phone}}"class="form-control">
            </div>

            <div>
                <label for="age">Age</label>
                <input id="age" type="number" name="age" value="{{$student->age}}" class="form-control">
            </div>

             <div>
                <label for="address">Address</label>
                <input id="address" type="text" name="address" value="{{$student->address}}" class="form-control">
            </div>
<br>
            <div>
                <label >Gender</label>
                <input  type="radio" name="gender" value="0" {{$student->gender ==0 ? "checked" : "" }} /> Nam
                <input  type="radio" name="gender" value="1" {{$student->gender ==1 ? "checked" : ""}} /> Nữ
                <input  type="radio" name="gender" value="2" {{$student->gender ==2 ? "checked" : ""}} /> Khác
            </div>
<br>
            <div>
            <input type="submit" name="" id="" class="btn btn-primary" value="Sửa">
            </div>



</form>
    
</div>

@endsection
