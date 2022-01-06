@extends('layouts.main')
@section('dataTitle', 'Edit Data')
@section('content')
<div class="wrapper">
  <h1>Edit Data Kelas</h1>

  <a href="/kelas" class="btn-red" style="padding: 5px; border-radius: 4px;" ><button class="btn btn-secondary">Kembali</button></a>
  
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

  
  
  <form method="POST" style="margin-top: 20px" action="{{ url('kelas', $kelas->id ) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="no_ruangan" class="form-label">No. Ruangan</label>
      <input name="no_ruangan" value="{{ $kelas->no_ruangan }}" type="text" class="form-control" id="no_ruangan" readonly="true">
    </div>
    <div class="mb-3">
      <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
      <input name="nama_ruangan" value="{{ $kelas->nama_ruangan }}" type="text" class="form-control" id="nama_ruangan" placeholder="Ubah Nama Ruangan">
    </div>
    <button class="btn btn-primary">Submit</button>

  </form>
</div>
@endsection