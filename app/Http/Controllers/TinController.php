<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TinController extends Controller
{
    public function index(){

        return view("index");
        
    }

    public function chitiettin($id) {
        $kq = DB::table('tin')
                    ->join('loaitin', 'loaitin.idLT', 'tin.idLT')
                    ->where('idTin', $id)
                    ->where('tin.AnHien', 1)
                    ->first();
        if($kq === null) {
            echo 'Không tồn tại tin này';
            return;
        }
        $kq->tags = explode(',', $kq->tags);
        $data = ['tin'=>$kq];
        return view('chitiettin', $data);
    }

    public function tintrongloai($idLT, $pageNum=1) {
        settype($idLT, 'int');
        $kq = DB::table('tin')
                    ->select('idTin', 'TieuDe', 'TomTat', 'urlHinh', 'Ngay')
                    ->where('idLT', $idLT)
                    ->where('AnHien', 1)
                    ->paginate(5);
        $tenLT = DB::table('loaitin')
                    ->where('idLT', $idLT)
                    ->value('Ten');
        $idTL = DB::table('loaitin')
                    ->where('idLT', $idLT)
                    ->value('idTL');
        $tenTL = DB::table('theloai')
                    ->where('idTL', $idTL)
                    ->value('TenTL');
        $data = ['listtin' => $kq, 'idTL' => $idTL, 'TenTL' => $tenTL, 'idLT' => $idLT, 'TenLT' => $tenLT];
        return view('tintrongloai', $data);
    }

    public function lienhe() {
        $d = array('title'=>'Liên hệ');
        return view('lienhe', $d);
    }
}
