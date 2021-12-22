@extends('layout.app')
@section('dataTitle', 'Edit Kelas')
@section('content')
<div class="wrapper">
  <h1>Edit Kelas</h1>

  <a href="/angkatan" class="btn-red" style="padding: 5px; border-radius: 4px;" >Kembali</a>
  
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
  
  <form method="POST" style="margin-top: 20px" action="{{ url('angkatan', $angkatan->id ) }}">
    @csrf
    @method('PUT')
    <input name="kelas" value="{{ $angkatan->kelas }}" type="text" placeholder="Ubah Kelas"> 
    <input name="jurusan" value="{{ $angkatan->jurusan }}" type="text" placeholder="Ubah Jurusan">
    <button class="btn-blue">Submit</button>
  </form>
</div>
@endsection