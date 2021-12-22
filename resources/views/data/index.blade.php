@extends('layout.app')
@section('dataGuru', 'Semua data')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Data CRUD Guru</h1>
  <a href="data/create" class="btn-blue">Tambahkan Data Guru</a>
  @if (session('Success'))
    <div class="alert-success">
        <p>{{ session('Success') }}</p>
    </div>
  @endif
  <table style="width:100%; margin-top: 20px">
    <thead>
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
        <td style="width: 100px"><button class="btn-green"><a href="{{ route('data.edit', $data->id) }}">Edit</a></button></td>
        <form method="POST" action="{{ url('data', $data->id ) }}">
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