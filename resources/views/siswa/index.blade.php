@extends('layouts.main')
@section('dataTitle', 'Daftar Siswa')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Data CRUD Siswa</h1>
  <a href="siswa/create" class="btn-blue"><button class="btn btn-primary" style="margin-bottom: 15px">Tambahkan Data Siswa</button></a>
   @if (session('success'))
    <div class="alert alert-danger" role="alert">
       <p>{{ session('success') }}</p> 
    </div>
@endif
  <table style="width:100%; margin-top: 25px" class="table table-striped border-dark text-center">
    <thead class="table-dark">
      <tr>
        <th>No. Absen</th>
        <th>Nama Siswa</th>
        <th>Bidang Keahlian</th>
        <th colspan="2">Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($siswa as $sis)
      <tr>
        <td style="width: 200px" >{{ $sis->no_absen}}</td>
        <td style="width: 500px" >{{ $sis->nama_siswa }}</td>
        <td style="width: 500px" >{{ $sis->keahlian_bidang }}</td>
        <td style="width: 100px"><a href="{{ route('siswa.edit', $sis->id) }}"><button class="btn btn-success">Edit</button></a></td>
        <form method="POST" action="{{ url('siswa', $sis->id ) }}">
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