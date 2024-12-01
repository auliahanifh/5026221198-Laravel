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
            'jumlahbagian' => $request->jumlah,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/bagian');

    }

    public function edit_bagian($kode) {
        $bagian = DB::table('bagian')->where('kodebagian','=',$kode)->get();
    return view('edit_bagian',['bagian' => $bagian]);
    }

    public function update_bagian(Request $request){
        DB::table('bagian')->where('kodebagian',$request->kode)->update([
            'kodebagian' => $request->kode,
            'namabagian' => $request->nama,
            'jumlahbagian' => $request->jumlah,
            'tersedia' => $request->tersedia
        ]);
    return redirect('/bagian');
    }
    public function hapus_bagian($kode){
        DB::table('bagian')->where('kodebagian',$kode)->delete();

    return redirect('/bagian');
    }

    public function cari_bagian(Request $request){
        $cari = $request->cari;
        $bagian = DB::table('bagian')
        ->where('namabagian','like',"%".$cari."%")
        ->paginate();

    return view('index_bagian',['bagian' => $bagian]);
    }
}
