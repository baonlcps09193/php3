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
}
