@extends('layout.app')
@section('dataTitle', 'Edit Kelas')
@section('content')
<div class="wrapper">
  <h1>Edit Kelas</h1>

  <a href="/angkatan" class="btn-red" style="padding: 5px; border-radius: 4px;" ><button class="btn btn-secondary">Kembali</button></a>
  
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
  
  <form method="POST" style="margin-top: 20px" action="{{ url('angkatan', $angkatan->id ) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="kelas" class="form-label">Kelas</label>
      <input name="kelas" value="{{ $angkatan->kelas }}" type="text" class="form-control" id="kelas" placeholder="Ubah Kelas">
    </div>
    <div class="mb-3">
      <label for="jurusan" class="form-label">Jurusan</label>
      <input name="jurusan" value="{{ $angkatan->jurusan }}" type="text" class="form-control" id="jurusan" placeholder="Ubah Jurusan">
    </div>
    <button class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection