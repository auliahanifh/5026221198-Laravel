@extends('template')

@section('test1', 'Tambah Keranjang Belanja')

@section('link1')
<a href="/cart"> Kembali</a>
@endsection

@section('konten')
	<form action="/cart/store" method="POST">
		{{ csrf_field() }}

        <form>
            <div class="form-group row mb-3">
                <label for="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
                <div class="col-sm-10">
                  <input type="number" name="KodeBarang" class="form-control" id="KodeBarang" required="required" placeholder="Isikan Kode Barang">
                </div>
            </div><div class="form-group row mb-3">
                <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
                <div class="col-sm-10">
                    <input type="number" name="Jumlah" class="form-control" id="Jumlah" required="required" placeholder="Isikan Jumlah">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="Harga" class="col-sm-2 col-form-label">Harga Per Item</label>
                <div class="col-sm-10">
                    <input type="number" name="Harga" class="form-control" id="Harga" required="required" placeholder="Isikan Harga">
                </div>
            </div>
            <center><button type="submit" class="btn btn-primary mt-2">Update Data</button></center>
        </form>
	</form>
@endsection
