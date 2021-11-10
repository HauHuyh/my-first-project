@extends('layout.master')
@section('text')
    
@endsection
@section('menu')
<a href="{{route('trangchu')}}"">Trang Chủ</a><br>
<a href="{{route('giangvien')}}">Giảng Viên </a><br>
<a href="{{route('sinhvien')}}">Sinh Viên</a><br>
<a href="{{route('tenkhoa')}}">Tên Khoa</a>
@endsection