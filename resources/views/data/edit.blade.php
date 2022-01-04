@extends('layout.app')
@section('datGuru', 'Data Edit')
@section('content')
<div class="wrapper">
  <h1>Edit Data Guru</h1>
  
  <a href="/data" class="btn-red" style="padding: 5px; border-radius: 4px"><button class="btn btn-secondary">Kembali</button></a>

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
  
  <form method="POST" style="margin-top: 20px" action="{{ url('data', $data->id ) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="nip" class="form-label">NIP</label>
      <input name="nip" value="{{ $data->nip }}" type="text" class="form-control" id="nip" readonly="true">
    </div>
     <div class="mb-3">
      <label for="nama_guru" class="form-label">Nama Guru</label>
      <input name="nama_guru" value="{{ $data->nama_guru }}" type="text" class="form-control" id="nama_guru" placeholder="Ubah Nama Guru">
    </div>
    <div class="mb-3">
      <label for="mata_pelajaran" class="form-label">Mata Pelajaran</label>
      <input name="mata_pelajaran" value="{{ $data->mata_pelajaran }}" type="text" class="form-control" id="mata_pelajaran" placeholder="Ubah Mata Pelajaran">
    </div>
    <button class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection