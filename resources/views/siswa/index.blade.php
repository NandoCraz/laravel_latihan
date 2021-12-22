@extends('layout.app')
@section('dataTitle', 'Daftar Siswa')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Data CRUD Siswa</h1>
  <a href="siswa/create" class="btn-blue">Tambahkan Data Siswa</a>
  @if (session('success'))
    <div class="alert-success">
        <p>{{ session('success') }}</p>
    </div>
  @endif
  <table style="width:100%; margin-top: 25px">
    <thead>
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
        <td style="width: 100px"><button class="btn-green"><a href="{{ route('siswa.edit', $sis->id) }}">Edit</a></button></td>
        <form method="POST" action="{{ url('siswa', $sis->id ) }}">
        @csrf
        @method('DELETE')
        <td style="width: 100px"><button class="btn-red">Hapus</button></td>
        </form>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection