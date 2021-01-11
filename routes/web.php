<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;
use App\Http\Controllers\GuimailController;

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
});

Route::get('/', [TinController::class,'index']);
Route::get('/tin/{id}', [TinController::class, 'chitiettin']);
Route::get('ttl/{id}', [TinController::class,'tintrongloai']);
Route::get('lienhe', [TinController::class, 'lienhe']);
Route::post('lienhe/', [GuimailController::class,'guimaillienhe']);