@extends('template')

@section('test1', 'Tambah Data Bagian')

@section('link1')
<a href="/bagian"> Kembali</a>
@endsection

@section('konten')
	<form action="/bagian/store" method="POST">
		{{ csrf_field() }}

        <form>
            <div class="form-group row mb-3">
                <label for="namabagian" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" name="namabagian" class="form-control" id="namabagian" required="required" placeholder="Isi nama">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="jumlahbagian" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-10">
                  <input type="number" name="jumlahbagian" class="form-control" id="jumlahbagian" required="required" placeholder="Isi Jumlah">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                <div class="col-sm-10 d-flex align-items-center">
                    <div class="form-check me-3">
                        <div class="form-check-input">
                            <input class="form-check-input" type="radio" name="tersedia" id="tersediaY" value="Y">
                            <label class="form-check-label" for="tersediaY">
                            Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tersedia" id="tersediaN" value="N">
                            <label class="form-check-label" for="tersediaN">
                            Tidak
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <center><button type="submit" class="btn btn-primary mt-2">Update Data</button></center>
        </form>
	</form>
@endsection
