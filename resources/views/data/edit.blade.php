@extends('layout.app')
@section('datGuru', 'Data Edit')
@section('content')
<div class="wrapper">
  <h1>Edit Data Guru</h1>
  
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
  
  <form method="POST" style="margin-top: 20px" action="{{ url('data', $data->id ) }}">
    @csrf
    @method('PUT')
    <input name="nip" value="{{ $data->nip }}" type="text" placeholder="Ubah NIP" readonly="true"> 
    <input name="nama_guru" value="{{ $data->nama_guru }}" type="text" placeholder="Ubah Nama Guru">
    <input name="mata_pelajaran" value="{{ $data->mata_pelajaran }}" type="text" placeholder="Ubah Mapel">
    <button class="btn-blue" style="margin-top: 20px">Submit</button>
  </form>
</div>
@endsection