<?php

namespace App\Http\Controllers;
use App\Models\GiangVien;
use Illuminate\Http\Request;

class GiangVienController extends Controller
{
    function layDanhSach(){
        $dsGiangVien=GiangVien::all();

        return view('giangvien',compact('dsGiangVien'));
    }
    function formThemMoi(){
        return view('themmoigiangvien');
    }
    function themMoi(Request $req){
        $giangVien= new GiangVien;
        $giangVien->ho_ten=$req->ho_ten;
        $giangVien->ten_dang_nhap=$req->ten_dang_nhap;
        $giangVien->mat_khau=$req->mat_khau;
        $giangVien->email=$req->email;

        $giangVien->save();
        return redirect()->route('giangvien');
    }
    function formCapNhat($id)
    {
        $giangVien=GiangVien::find($id);
        return view('capnhatgiangvien',compact('giangVien'));
    }
}
