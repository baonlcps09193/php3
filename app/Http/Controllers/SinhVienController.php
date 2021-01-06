<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    public function index() {
        $data = ['id' => 'PS09193', 'name' => 'Nguyen Le Chi Bao'];
        return view('hotensinhvien', $data);
    }
}
