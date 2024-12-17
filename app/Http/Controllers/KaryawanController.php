<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
	public function index(){
        $karyawan = DB::table('karyawan')->get();
		return view('karyawan',['karyawan' => $karyawan]);
    }

    public function tambah(){

	return view('tambahKaryawan');
    }

    public function store(Request $request) {
	DB::table('karyawan')->insert([
		'kodepegawai' => $request->kodepegawai,
		'namalengkap' => $request->namalengkap,
		'divisi' => $request->divisi,
		'departemen' => $request->departemen
	]);
	return redirect('/karyawan');

    }

    public function hapus($kodepegawai){
	DB::table('karyawan')->where('kodepegawai',$kodepegawai)->delete();

	return redirect('/karyawan');
    }

    public function cari(Request $request){
		$cari = $request->cari;
		$karyawan = DB::table('karyawan')
		->where('namalengkap','like',"%".$cari."%")
		->paginate();

		return view('karyawan',['karyawan' => $karyawan]);
	}
}
