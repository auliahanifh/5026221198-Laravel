@extends('template')

@section('test1', 'Data Bagian')

@section('link1')
    <a href="/bagian/tambah" class="btn btn-primary"> + Tambah Bagian Baru</a>
@endsection

@section('konten')
	<form action="/bagian/cari" method="GET">
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label"><nav></nav>Cari Bagian</label>
            <div class="col-sm-6">
              <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari Bagian .." value="{{ old('cari') }}">
            </div>
            <div class="col-sm-4">
                <input type="submit" value="CARI" class="btn btn-success">
              </div>
          </div>

	</form>
    </br>

    <table class="table table-striped table-hover">
        <tr>
            <th>kode</th>
            <th>nama</th>
            <th>jumlah</th>
            <th>tersedia</th>
        </tr>
        @foreach($bagian as $b)
        <tr>
            <td>{{ $b->kodebagian }}</td>
            <td>{{ $b->namabagian }}</td>
            <td>{{ $b->jumlahbagian }}</td>
            <td>{{ $b->tersedia }}</td>
            <td>
                <a href="/bagian/edit/{{ $b->kodebagian }}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="/bagian/hapus/{{ $b->kodebagian }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </table>

    <br/>
	Halaman : {{ $bagian->currentPage() }} <br/>
	Jumlah Data : {{ $bagian->total() }} <br/>
	Data Per Halaman : {{ $bagian->perPage() }} <br/>

	{{ $bagian->links() }}

@endsection
