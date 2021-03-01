<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/download',function(){return view('download');})->middleware('auth');
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => ['auth','Quantri']], function () {

    Route::resource('theloai', 'TheLoaiController');
    
    Route::resource('loaitin', 'LoaiTinController');
    
    Route::resource('tintuc', 'TinController');
    
    Route::resource('ykien', 'YkienController');
    
    Route::get('/quantri', function() {
        return view('admin.dashboard');
    });
});
