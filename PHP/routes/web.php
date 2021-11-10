<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GiangVienController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout');
})->name('trangchu');
Route::get('/giang-vien',[GiangVienController::class,'layDanhSach'])->name('giangvien');
Route::get('/giang-vien/them-moi',[GiangVienController::class,'formThemMoi'])->name('themmoi-gv');
Route::post('/giang-vien/them-moi',[GiangVienController::class,'themMoi'])->name('xulithemmoi-gv');
Route::get('/giangvien/cap-nhat/{id}',  [GiangVienController::class,'formCapNhat'])->name('capnhat-gv');

Route::get('/sinh-vien', function () {
   return view('sinhvien') ;
})->name('sinhvien');
Route::get('ten-khoa', function () {
    return view('tenkhoa');
})->name('tenkhoa');
