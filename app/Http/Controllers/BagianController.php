<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BagianController extends Controller
{
	public function index_bagian(){
        $bagian = DB::table('bagian')->paginate(20);
		return view('index_bagian',['bagian' => $bagian]);
    }

    public function tambah_bagian(){

	return view('tambah_bagian');
    }

    public function store_bagian (Request $request) {
        DB::table('bagian')->insert([
            'kodebagian' => $request->kode,
            'namabagian' => $request->nama,
            'pjumlahbagian' => $request->jumlah,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/bagian');

    }
}
