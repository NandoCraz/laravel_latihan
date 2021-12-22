@extends('layout.app')
@section('dataTitle', 'Data Seluruh Ruangan')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Data CRUD Seluruh Ruangan</h1>
  
  <a href="kelas/create" class="btn-blue"><button class="btn btn-primary" style="margin-bottom: 15px">Tambahkan Data Ruangan</button></a>
  @if (session('success'))
    <div class="alert alert-danger" role="alert">
       <p>{{ session('success') }}</p> 
    </div>
@endif
  <table style="width:100%; margin-top: 25px" class="table table-striped border-dark text-center">
    <thead class="table-dark">
      <tr>
        <th>No. Ruangan</th>
        <th>Nama Ruangan</th>
        <th colspan="2">Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($kelas as $kls)
      <tr>
        <td style="width: 200px" >{{ $kls->no_ruangan}}</td>
        <td style="width: 500px" >{{ $kls->nama_ruangan }}</td>
        <td style="width: 100px"><a href="{{ route('kelas.edit', $kls->id) }}"><button class="btn btn-success">Edit</button></a></td>
  <form method="POST" action="{{ url('kelas', $kls->id ) }}">
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