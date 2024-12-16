<?php

use Illuminate\Support\Facades\Route;
# use App\Http\Controllers\DosenController;

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


Route::get('/error', function () {
    return "<h1>Server Error : Ada kesalahan</h1>";
});

Route::get('/day1', function () {
    return view('day1');
});

Route::get('/style', function () {
    return view('style');
});

Route::get('/style2', function () {
    return view('style2');
});

Route::get('/responsive1', function () {
    return view('responsive1');
});

Route::get('/tugas1', function () {
    return view('tugas1');
});

Route::get('/5026221198', function () {
    return view('5026221198');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/blog/home', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('blog', 'App\Http\Controllers\DosenController@blog');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

Route::get('/pegawai', 'App\Http\Controllers\PegawaiDBController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiDBController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiDBController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiDBController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiDBController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiDBController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiDBController@cari');

Route::get('/bagian', 'App\Http\Controllers\BagianController@index');
Route::get('/bagian/add', 'App\Http\Controllers\BagianController@add');
Route::post('/bagian/store', 'App\Http\Controllers\BagianController@store');
Route::get('/bagian/edit/{kode}', 'App\Http\Controllers\BagianController@edit');
Route::post('/bagian/update', 'App\Http\Controllers\BagianController@update');
Route::get('/bagian/delete/{kode}','App\Http\Controllers\BagianController@delete');
Route::get('/bagian/search','App\Http\Controllers\BagianController@search');

Route::get('/cart', 'App\Http\Controllers\CartController@index');
Route::get('/cart/add', 'App\Http\Controllers\CartController@add');
Route::post('/cart/store', 'App\Http\Controllers\CartController@store');
Route::get('/cart/edit/{kode}', 'App\Http\Controllers\CartController@edit');
Route::post('/cart/update', 'App\Http\Controllers\CartController@update');
Route::get('/cart/delete/{kode}','App\Http\Controllers\CartController@delete');
Route::get('/cart/search','App\Http\Controllers\CartController@search');
