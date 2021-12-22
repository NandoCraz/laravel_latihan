@extends('layout.app')
@section('dataTitle', 'Edit Data Siswa')
@section('content')
<div class="wrapper">
  <h1>Edit Data Siswa</h1>
  <a href="/siswa" class="btn-red" style="padding: 5px; border-radius: 4px">Kembali</a>
  
  @if (session('success'))
  <div class="alert-success">
    <p>{{ session('success') }}</p>
  </div>
  @endif
  
  @if ($errors->any())
  <div class="alert-danger">
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
    <input name="no_absen" value="{{ $siswa->no_absen }}" type="text" placeholder="Masukkan No. absen"> 
    <input name="nama_siswa" value="{{ $siswa->nama_siswa }}" type="text" placeholder="Masukkan Nama">
    <input name="keahlian_bidang" value="{{ $siswa->keahlian_bidang}}" type="text" placeholder="Bidang Keahlian">
    <button class="btn-blue" style="margin-top: 20px">Submit</button>
  </form>
</div>
@endsection