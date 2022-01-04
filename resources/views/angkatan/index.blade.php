@extends('layout.app')
@section('dataTitle', 'Data Semua Kelas')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Data CRUD Semua Kelas</h1>
  <a href="angkatan/create" class="btn-primary"><button class="btn btn-primary" style="margin-bottom: 15px">Tambahkan Data Angkatan Kelas</button></a>
  @if (session('success'))
    <div class="alert alert-danger" role="alert">
       <p>{{ session('success') }}</p> 
    </div>
@endif
  <table style="width:100%; margin-top: 25px" class="table table-striped border-dark text-center">
    <thead>
      <tr>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th colspan="2">Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($angkatan as $angkat)
      <tr>
        <td style="width: 200px" >{{ $angkat->kelas}}</td>
        <td style="width: 500px" >{{ $angkat->jurusan }}</td>
        <td style="width: 100px"><a href="{{ route('angkatan.edit', $angkat->id) }}"><button class="btn btn-success">Edit</button></a></td>
  <form method="POST" action="{{ url('angkatan', $angkat->id ) }}">
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