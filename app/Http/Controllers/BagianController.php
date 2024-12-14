<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BagianController extends Controller
{
	public function index(Request $request){
        $bagian = DB::table('bagian')->paginate(20);
		return view('tesBagian',['bagian' => $bagian]);
    }

    public function search(Request $request){
        $search = $request->search;
        $pagination = $request->query('pagination',20);
        if($search == null){
            $bagian = DB::table('bagian')->paginate($pagination);
        }else{
            $bagian = DB::table('bagian')
            ->where('namabagian','like',"%".$search."%")
            ->paginate($pagination);
        }

    return view('tesBagian',['bagian' => $bagian]);
    }

    public function add(){

	return view('addBagian');
    }

    public function store (Request $request) {
        DB::table('bagian')->insert([
            'namabagian' => $request->namabagian,
            'jumlahbagian' => $request->jumlahbagian,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/bagian');

    }

    public function edit($kodebagian) {
        $bagian = DB::table('bagian')->where('kodebagian', $kodebagian)->get();
    return view('editBagian',['bagian' => $bagian]);
    }

    public function update(Request $request){
        DB::table('bagian')->where('kodebagian',$request->kodebagian)->update([
            'namabagian' => $request->namabagian,
            'jumlahbagian' => $request->jumlahbagian,
            'tersedia' => $request->tersedia
        ]);
    return redirect('/bagian');
    }
    public function delete($kodebagian){
        DB::table('bagian')->where('kodebagian',$kodebagian)->delete();

    return redirect('/bagian');
    }
}
