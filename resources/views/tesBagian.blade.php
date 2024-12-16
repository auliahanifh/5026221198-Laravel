@extends('template')

@section('test1', 'Data Bagian')

@section('link1')
    <a href="/bagian/add" class="btn btn-primary"> + Tambah Bagian Baru</a>
@endsection

@section('konten')
	<form action="/bagian/search" method="GET">
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label"><nav></nav>Cari Bagian</label>
            <div class="col-sm-6">
              <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari Bagian .." value="{{ request('search') }}">
            </div>
            <div class="col-sm-4">
                <input type="submit" value="CARI" class="btn btn-success">
              </div>
          </div>

	</form>
    </br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach($bagian as $b)
        <tr>
            <td>{{ $b->kodebagian }}</td>
            <td>{{ $b->namabagian }}</td>
            <td>{{ $b->jumlahbagian }}</td>
            <td>
                @if ($b->tersedia === 'Y')
                <i class="fa-solid fa-check text-success"></i>
                @else
                <i class="fa-solid fa-minus text-danger"></i>
                @endif
            </td>
            <td class="text-center">
                <a href="/bagian/edit/{{ $b->kodebagian }}" class="btn btn-warning btn-icon">Edit</a>
                <a href="/bagian/delete/{{ $b->kodebagian }}" class="btn btn-danger">Hapus</a>
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
