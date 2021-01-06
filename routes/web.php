<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QtTinController;
use App\Http\Controllers\TinController;
use App\Http\Controllers\SinhVienController;

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

Route::get('/', [TinController::class, 'index']);

Route::get('/lien-he', [TinController::class, 'lienhe']);

Route::get('/gioi-thieu', [TinController::class, 'gioithieu']);

Route::get('/chi-tiet/{id}', [TinController::class, 'lay1tin']);

Route::get('/txn', [TinController::class, 'tinxemnhieu']);

Route::get('/tnb', function() {
    return view('Tin/tnb');
});

Route::get('/ajax', function() {
    return view('Tin/right');
});

Route::get('ttl/{idLT}/{pageNum}', [TinController::class, 'tintrongloai']);

Route::get('/thongtinsv', [SinhVienController::class, 'index']);