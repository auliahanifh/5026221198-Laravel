@extends('template')

@section('test1', 'Data Karyawan')

@section('konten')
<form action="/karyawan/cari" method="GET">
    <div class="row mb-3">
        <label for="namalengkap" class="col-sm-2 col-form-label"><nav></nav>Cari Nama Karyawan</label>
        <div class="col-sm-6">
          <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari Karyawan .." value="{{ old('cari') }}">
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
            <th>NAMALENGKAP</th>
            <th>Divisi</th>
            <th>departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach($karyawan as $k)
        <tr>
            <td>{{ $k->kodepegawai }}</td>
            <td>{{ $k->namalengkap }}</td>
            <td>{{ $k->divisi }}</td>
            <td>{{ $k->departemen }}</td>
            <td>
                <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus Record</a>
            </td>
        </tr>
        @endforeach
    </table>
    <center><a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a></center>
</br>
@endsection
