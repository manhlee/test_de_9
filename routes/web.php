<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\loginMiddleware;

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
Route::get('trangchu','trangchuController@load_trangchu')->name('trangchu')->middleware(loginMiddleware::class);
Route::get('hinhanh','trangchuController@load_hinhanh')->middleware(loginMiddleware::class);
Route::get('themmoi','trangchuController@load_themmoi')->middleware(loginMiddleware::class);
Route::post('themmoi','trangchuController@post_themmoi')->middleware(loginMiddleware::class);
Route::get('timkiem','trangchuController@timkiem')->middleware(loginMiddleware::class);
Route::get('dangnhap','trangchuController@load_dangnhap')->name('login');
Route::post('dangnhap','trangchuController@post_dangnhap');
Route::get('dangxuat','trangchuController@dangxuat');
