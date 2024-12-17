@extends('template')

@section('test1', 'Tambah Karyawan')

@section('link1')
<a href="/karyawan"> Kembali</a>
@endsection

@section('konten')
	<form action="/karyawan/store" method="POST">
		{{ csrf_field() }}

        <form>
            <div class="form-group row mb-3">
                <label for="kodepegawai" class="col-sm-2 col-form-label">Kode</label>
                <div class="col-sm-10">
                    <input type="text" name="kodepegawai" class="form-control" id="kodpegawai" required="required" placeholder="Isi Kode">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                  <input type="text" name="namalengkap" class="form-control" id="namalengkap" required="required" placeholder="Isi Nama Lengkap">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                <div class="col-sm-10">
                    <input type="text" name="divisi" class="form-control" id="divisi" required="required" placeholder="Isikan Divisi">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                <div class="col-sm-10">
                    <input type="number" name="departemen" class="form-control" id="departemen" required="required" placeholder="Isikan Departemen">
                </div>
            </div>
            <center><button type="submit" class="btn btn-primary mt-2">SIMPAN</button></center>
        </form>
	</form>
@endsection
