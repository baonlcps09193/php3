<?php

use Illuminate\Support\Facades\Route;
use App\dienthoai;
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
    return view('welcome');
});

Route::get('phones', function() {
    $phones = dienthoai::all();
    foreach($phones as $phone) {
        echo $phone->ten_DT . '<br>';
    }
});

Route::get('10dienthoaihot', function(){
    $kq = dienthoai::where("Hot","=",1)->limit(10)->get();
    foreach($kq as $dt) echo $dt->ten_DT,"<br>";
});

Route::get('themDT/', function(){
    $dt = new App\dienthoai();
    $dt->ten_DT="Samsung Galary S8";
    $dt->mo_ta="Samsung Galary S8";
    $dt->gia=600000;
    $dt->gia_KM=550000;
    $dt->id_loai=1;
    $dt->url_hinh = $dt->bai_viet = $dt->ghi_chu='';
    $dt->an_hien = $dt->hot = 1;
    $dt->ngay_cap_nhat='2020-05-30';
    $dt->save();
    echo "Đã chèn xong";
});

Route::get('themLoai', function() {
    $loai = new App\loaisp();
    $loai->ten_loai = 'Nokia';
    $loai->thu_tu = 7;
    $loai->an_hien = $loai->id_CL = 1;
    $loai->url_hinh = '';
    $loai->save();
    echo "Đã chèn xong";
});

Route::get('capnhatDT/{id}', function($id){
    $dt = App\dienthoai::find($id);
    $dt->ten_DT="Samsung Galary S9";
    $dt->mo_ta="Samsung Galary S9";
    $dt->save();
    echo "Đã cập nhật xong";
});

Route::get('xoaDT/{id}', function($id){
    $dt = App\dienthoai::find($id);
    $dt->delete();
    echo "Đã xóa xong";
});