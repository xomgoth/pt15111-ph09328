@extends('admin-layout.master')
@section('title','Thêm sinh viên')
@section('header','Thêm Sinh Viên')
@section('content')
<?php
$gender = [1 => 'Nam', 2 => 'Nữ', 0 => 'Không hiển thị'];

?>
<div class="container">
    <form action="{{route('students.store')}}" method="post" class="form-group">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name" id="" class="form-control">
        <label for="">Phone</label>
        <input type="text" name="phone" id="" class="form-control">
        <label for="">Age</label>
        <input type="text" name="age" id="" class="form-control">
        <label for="">Address</label>
        <input type="text" name="address" id="" class="form-control"">
        <label for="">Gender</label>
        <br>
        @foreach($gender as $key => $item)
        <input type="radio" name="gender" id="" value="{{$key}}">{{$item}} &nbsp;
        @endforeach
        <br>
        <br>
        <br>
        <input type="submit" name="" id="" class="btn btn-primary" value="Thêm">
    </form>
</div>


@endsection