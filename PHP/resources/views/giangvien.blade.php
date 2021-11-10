@extends('layout.master')
@section('text')
    <h1>Danh Sách Giảng Viên</h1>

    <a href="{{route('themmoi-gv')}}">Thêm mới</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Họ Tên </th>
            <th>Tên Đăng Nhập</th>
          
            <th>Email</th>
            <th>Ngày tạo</th>
            <th>Chức năng</th>
        </tr>
        @foreach ($dsGiangVien as $gv)
            <tr>
                <td>{{$gv->id}}</td>
                <td>{{$gv->ho_ten}}</td>
                <td>{{$gv->ten_dang_nhap}}</td>
                <td>{{$gv->email}}</td>
                <td>{{$gv->created_at}}</td>
                <td>Cập nhật</td>
            </tr>
        @endforeach
    </table>
@endsection
@section('menu')
    <a href="{{route('trangchu')}}"">Trang Chủ</a><br>
    <a href="{{route('giangvien')}}">Giảng Viên </a><br>
    <a href="{{route('sinhvien')}}">Sinh Viên</a><br>
    <a href="{{route('tenkhoa')}}">Tên Khoa</a>
@endsection