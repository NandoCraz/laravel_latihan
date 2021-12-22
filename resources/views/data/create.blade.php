@extends('layout.app')
@section('dataGuru', 'Buat Post Baru')
@section('content')
<div class="wrapper">
  <h1>Buat Data Baru</h1>

  <a href="/data" class="btn-red" style="padding: 5px; border-radius: 4px">Kembali</a>
  
  @if (session('Success'))
  <div class="alert-success">
    <p>{{ session('Success') }}</p>
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
  
  <form method="POST" style="margin-top: 20px;" action="{{ url('data') }}">
    @csrf
    <input name="nip" type="text" placeholder="Masukkan NIP"> 
    <input name="nama_guru" type="text" placeholder="Masukkan Nama Guru">
    <input name="mata_pelajaran" type="text" placeholder="Mata Pelajaran">
    <button class="btn-blue" style="margin-top: 20px">Submit</button>
  </form>
</div>
@endsection