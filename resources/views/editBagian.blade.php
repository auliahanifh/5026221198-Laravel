@extends('template')

@section('test1', 'Edit Data Bagian')

@section('link1')
<a href="/bagian"> Kembali</a>
@endsection

@section('konten')
	@foreach($bagian as $b)
	<form action="/bagian/update" method="post">
		{{ csrf_field() }}

        <input type="hidden" name="kodebagian" id="kodebagian" value="{{ $b-> kodebagian}}">

		<div class="form-group row mb-3">
            <label for="namabagian" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" name="namabagian" class="form-control" id="namabagian" required="required" value="{{ $b-> namabagian}}">
            </div>
          </div>
        <div class="form-group row mb-3">
            <label for="jumlahbagian" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
              <input type="number" name="jumlahbagian" class="form-control" id="jumlahbagian" required="required" value="{{ $b-> jumlahbagian}}">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="form-check me-3">
                <div class="form-check-input">
                    <input class="form-check-input" type="checkbox" name="tersedia" id="tersediaY" required="required" value="Y" {{ $b-> tersedia == 'Y' ? 'checked' : ''}}>
                    <label class="form-check-label" for="tersediaY">
                        Ya
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tersedia" id="tersediaN" required="required" value="N" {{ $b-> tersedia == 'N' ? 'checked' : ''}}>
                    <label class="form-check-label" for="tersediaN">
                    Tidak
                    </label>
                </div>
            </div>
        </div>
        <center><button type="submit" class="btn btn-primary mt-2">Update Data</button></center>
	</form>
	@endforeach
@endsection
