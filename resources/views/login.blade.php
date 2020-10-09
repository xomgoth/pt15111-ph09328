@extends('layout.master')
@section('title','login')
@section('header','Login')
@section('content')
  <div class="container">
  <form method="POST" action="{{ route('post-login') }}">
        @csrf
        <input type="text" name="username"  placeholder="Username" >

        <input type="password" name="password" placeholder="PassWord">
        
        <button type="sumbit">Sumbit</button>
    </form>
    
  </div>
  @endsection
    @section('footer','login')