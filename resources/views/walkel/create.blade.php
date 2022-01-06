@extends('layouts.main')
@section('dataTitle', 'Wali Kelas Baru')
@section('content')
<div class="wrapper">
  <h1>Data Wali Kelas Baru</h1>

  <a href="/walkel" class="btn-red" style="padding: 5px; border-radius: 4px;" ><button class="btn btn-secondary">Kembali</button></a>
  
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
  
  <form method="POST" style="margin-top: 20px" action="{{ url('walkel') }}">
    @csrf
    <div class="mb-3">
      <label for="guru" class="form-label">Nama Guru</label>
      <select name="id_guru" id="guru" class="form-control">
          <option value="" selected disabled>Pilih Guru</option>
          @foreach ($guru as $gr)
            <option value="{{$gr->id}}">{{$gr->nama_guru}}</option>
          @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="kelas" class="form-label">Kelas</label>
      <select name="id_angkatan" id="kelas" class="form-control">
          <option value="" selected disabled>Pilih Kelas</option>
          @foreach ($angkatan as $angkat)
            <option value="{{$angkat->id}}">{{$angkat->kelas}}</option>
          @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="jurusan" class="form-label">Jurusan</label>
      <select name="id_jurusan" id="jurusan" class="form-control">
          <option value="" selected disabled>Pilih Jurusan</option>
          @foreach ($angkatan as $angkat)
            <option value="{{$angkat->id}}">{{$angkat->jurusan}}</option>
          @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="ruangan" class="form-label">Ruangan</label>
      <select name="id_ruangan" id="kelas" class="form-control">
          <option value="" selected disabled>Pilih Ruangan</option>
          @foreach ($ruangan as $ruang)
            <option value="{{$ruang->id}}">{{$ruang->nama_ruangan}}</option>
          @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="tahun_ajaran" class="form-label">Nama Ruangan</label>
      <input name="tahun_ajaran" type="text" class="form-control" id="tahun_ajaran" placeholder="Tambahkan Tahun Ajaran">
    </div>
    <button class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection