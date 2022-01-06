@extends('layouts.main')
@section('dataGuru', 'Semua data')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Data CRUD Guru</h1>
  <a href="data/create" class="btn-blue"><button class="btn btn-primary" style="margin-bottom: 15px">Tambahkan Data Guru</button></a>
 @if (session('success'))
    <div class="alert alert-danger" role="alert">
       <p>{{ session('success') }}</p> 
    </div>
@endif
  <table style="width:100%; margin-top: 20px" class="table table-striped border-dark text-center">
    <thead class="table-dark">
      <tr>
        <th>NIP</th>
        <th>Nama Guru</th>
        <th>Mata Pelajaran</th>
        <th colspan="2">Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($datas as $data)
      <tr>
        <td style="width: 200px" >{{ $data->nip}}</td>
        <td style="width: 500px" >{{ $data->nama_guru }}</td>
        <td style="width: 350px">{{ $data->mata_pelajaran }}</td>
        <td style="width: 100px"><a href="{{ route('data.edit', $data->id) }}"><button class="btn btn-success">Edit</button></a></td>
        <form method="POST" action="{{ url('data', $data->id ) }}">
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