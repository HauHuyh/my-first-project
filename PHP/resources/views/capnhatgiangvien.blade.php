@extends('layout.master')

@section('menu')
<a href="{{route('trangchu')}}"">Trang Chủ</a><br>
<a href="{{route('giangvien')}}">Giảng Viên </a><br>
<a href="{{route('sinhvien')}}">Sinh Viên</a><br>
<a href="{{route('tenkhoa')}}">Tên Khoa</a>

@endsection
@section('text')
<h1>Thêm giảng viên</h1>
<a href="{{route('giangvien')}}">Quay lại</a>
<form action="{{route('xulithemmoi-gv')}}" method="post">
    @csrf
    <table>
        <tr>
            <th>Họ tên</th>
            <td><input type="text" name="ho_ten"> value={{$giangVien->$id}}</td>
        </tr>
        <tr>
            <th>Tên đăng nhập</th>
            <td><input type="text" name="ten_dang_nhap"></td>
        </tr>
        <tr>
            <th>Mật khẩu</th>
            <td><input type="password" name="mat_khau"></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="Email" name="email"></td>
        </tr>
        <tr>
            <th></th>
            <td><button type="submit">Cập nhật</button></td>
        </tr>
    </table>
</form>
@endsection