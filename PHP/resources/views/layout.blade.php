@extends('layout.master')

@section('text')
<h1>Hệ thống học tập trực tuyến </h1>    
<h3>Lớp CĐTH19PMC</h3>
@endsection 
@section('menu')
    <a href="{{route('trangchu')}}"">Trang Chủ</a><br>
    <a href="{{route('giangvien')}}">Giảng Viên </a><br>
    <a href="{{route('sinhvien')}}">Sinh Viên</a><br>
    <a href="{{route('tenkhoa')}}">Tên Khoa</a>
@endsection