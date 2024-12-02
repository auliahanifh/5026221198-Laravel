@extends('template')

@section('test1', 'Data Bagian')

@section('link1')
<a href="/bagian"> Kembali</a>
@endsection

@section('konten')
	@foreach($bagian as $p)
	<form action="/bagian/update_bagian" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $b->kodebagian }}"> <br/>
		<div class="row mb-3">
            <label for="kode" class="col-sm-2 col-form-label"><nav></nav>Kode</label>
            <div class="col-sm-10">
              <input type="text" name="kode" class="form-control" id="kode" required="required" value="{{ $b->kodebagian }}">
            </div>
          </div>
          <div class="row mb-3">
              <label for="nama" class="col-sm-2 col-form-label"><nav></nav>Nama</label>
              <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="nama" required="required" value="{{ $b->namabagian }}">
              </div>
            </div>
          <div class="row mb-3">
              <label for="jumlah" class="col-sm-2 col-form-label"><nav></nav>Jumlah</label>
              <div class="col-sm-10">
                <input type="number" name="jumlah" class="form-control" id="jumlah" required="required" value="{{ $b->jumlahbagian }}">
              </div>
            </div>
            <div class="row mb-3">
                <label for="switch" class="col-sm-2 col-form-label"><nav></nav>Tersedia</label>
              </div>
              <div class="col-sm-10">
                <input type="checkbox" name="tersediaY" id="tersediaY" required="required"><i>Ya</i><span class="slider"></span>
                <input type="checkbox" name="tersediaN" id="tersediaN" required="required"><i>Tidak</i><span class="slider"></span>
              </div>
            <div class="row mb-3">
              <div class="col-sm-12">
                <center><input type="submit" value="Simpan Data" class="btn btn-primary" required="required"></center>
              </div>
            </div>
	</form>
	@endforeach
@endsection
