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

Route::get('/bagian', 'App\Http\Controllers\BagianController@index_bagian');
Route::get('/bagian/tambah', 'App\Http\Controllers\BagianController@tambah_bagian');
Route::post('/bagian/store', 'App\Http\Controllers\BagianController@store_bagian');
Route::get('/bagian/edit/{kode}', 'App\Http\Controllers\BagianController@edit_bagian');
Route::post('/bagian/update', 'App\Http\Controllers\BagianController@update_bagian');
Route::get('/bagian/hapus/{kode}','App\Http\Controllers\BagianController@hapus_bagian');
Route::get('/bagian/cari','App\Http\Controllers\BagianController@cari_bagian');
