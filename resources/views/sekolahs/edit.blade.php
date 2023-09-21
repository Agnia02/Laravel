@extends('home')
@section('student')

<h1>Sekolah</h1>

<div class="mb-3">
  <form action="{{ route('sekolahs.update', $sekolah->id)}}" class="" method="post">
    @csrf
    @method('PUT')
                              <label class="form-label">Nama Sekolah</label>
                              <input type="text" class="form-control" name="nama_sekolah" placeholder="Tulis Nama Sekolah"
                              placeholder= "Tulis Nama Sekolah" value= "{{$sekolah->nama_sekolah}}">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Alamat Sekolah</label>
                              <input type="text" class="form-control" name="alamat" placeholder="Tulis Alamat Sekolah"
                              placeholder= "Tulis Alamat Sekolah" value= "{{$sekolah->alamat}}">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Jurusan</label>
                              <input type="text" class="form-control" name="jurusan" placeholder="Tulis Jurusan"
                              placeholder= "Tulis Jurusan" value= "{{$sekolah->jurusan}}">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Jumlah Guru</label>
                              <input type="text" class="form-control" name="jumlah_guru" placeholder="Tulis Jumlah Guru"
                              placeholder= "Tulis Jumlah Guru" value= "{{$sekolah->jumlah_guru}}">
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-primary">
</form>

@endsection