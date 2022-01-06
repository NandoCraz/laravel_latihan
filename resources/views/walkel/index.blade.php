@extends('layouts.main')
@section('dataTitle', 'Data Wali Kelas')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Data CRUD Wali Kelas</h1>
  
  <a href="walkel/create" class="btn-blue"><button class="btn btn-primary" style="margin-bottom: 15px">Tambahkan Data Ruangan</button></a>
  @if (session('success'))
    <div class="alert alert-danger" role="alert">
       <p>{{ session('success') }}</p> 
    </div>
@endif
  <table style="width:100%; margin-top: 25px" class="table table-striped border-dark text-center">
    <thead class="table-dark">
      <tr>
        <th>Nama Guru</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Nama Ruangan</th>
        <th>Tahun Ajaran</th>
        <th colspan="2">Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($wali as $wl)
      <tr>
        <td style="width: 200px" >{{ $wl->nama_guru}}</td>
        <td style="width: 200px" >{{ $wl->kelas }}</td>
        <td style="width: 200px" >{{ $wl->jurusan}}</td>
        <td style="width: 200px" >{{ $wl->nama_ruangan }}</td>
        <td style="width: 200px" >{{ $wl->tahun_ajaran }}</td>
        <td style="width: 100px"><a href="{{ route('walkel.edit', $wl->id) }}"><button class="btn btn-success">Edit</button></a></td>
  <form method="POST" action="{{ url('kelas', $wl->id ) }}">
    @csrf
    @method('DELETE')
    <td style="width: 100px"><button class="btn btn-danger">Hapus</button></td>
  </form>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection