@extends('layout.app')
@section('dataTitle', 'Buat Data Siswa')
@section('content')
<div class="wrapper">
  <h1>Buat Data Siswa</h1>
   
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
  
  <form method="POST" style="margin: 20px 0" action="{{ url('siswa') }}">
    @csrf
    <input name="no_absen" type="text" placeholder="No. Absen"> 
    <input name="nama_siswa" type="text" placeholder="Nama Siswa">
    <input name="keahlian_bidang" type="text" placeholder="Bidang Keahlian">
    <button class="btn-blue" style="margin-top: 20px">Submit</button>
  </form>
</div>
@endsection