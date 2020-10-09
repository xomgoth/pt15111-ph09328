@extends('admin-layout.master')
@section('title','Chi tiết sinh viên')

@section('content')

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
 
 @endsection