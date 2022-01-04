@extends('layout.app')
@section('dataTitle', 'Edit Data Siswa')
@section('content')
<div class="wrapper">
  <h1>Edit Data Siswa</h1>
  <a href="/siswa" class="btn-red" style="padding: 5px; border-radius: 4px"><button class="btn btn-secondary">Kembali</button></a>
  
  @if (session('success'))
  <div class="alert alert-success" style="margin-top: 15px" role="alert">
    <p>{{ session('success') }}</p>
  </div>
  @endif
  
  @if ($errors->any())
  <div class="alert alert-warning" style="margin-top: 15px" role="alert">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  
  <form method="POST" style="margin: 20px 0" action="{{ url('siswa', $siswa->id ) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="no_absen" class="form-label">No. Absen</label>
      <input name="no_absen" value="{{ $siswa->no_absen }}" type="text" class="form-control" id="no_absen" placeholder="Ubah No. Absen ">
    </div>
     <div class="mb-3">
      <label for="nama_siswa" class="form-label">Nama Siswa</label>
      <input name="nama_siswa" value="{{ $siswa->nama_siswa }}" type="text" class="form-control" id="nama_siswa" placeholder="Ubah Nama Siswa>
    </div>
    <div class="mb-3">
      <label for="keahlian_bidang" class="form-label">Bidang Keahlian</label>
      <input name="keahlian_bidang" value="{{ $siswa->keahlian_bidang }}" type="text" class="form-control" id="keahlian_bidang" placeholder="Ubah Bidang Keahlian">
    </div>
    <button class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection