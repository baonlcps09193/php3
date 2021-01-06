<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinController extends Controller
{
    public function index() {
        return view('Tin/index');
    }

    public function lienhe() {
        return view('Tin/lienhe');
    }

    public function gioithieu() {
        return view('Tin/gioithieu');
    }

    public function lay1tin($id) {
        $data = ['id' => $id];
        return view('Tin/chitiet', $data);
    }

    public function tinxemnhieu() {
        return view('Tin/txn');
    }

    public function tintrongloai($idLT, $pageNum) {
        $data = ["idLT" => $idLT, 'pageNum' => $pageNum];
        return view('Tin/tintrongloai', $data);
    }
}
