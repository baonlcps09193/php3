<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RqNhapHS;

class HsController extends Controller
{
    public function hs() {
        return view('nhaphs');
    }
    public function hs_store(RqNhapHS $request) {
        echo "Code xử lý";
    }
}
