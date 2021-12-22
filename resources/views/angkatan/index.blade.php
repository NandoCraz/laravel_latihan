@extends('layout.app')
@section('dataTitle', 'Data Semua Kelas')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Data CRUD Semua Kelas</h1>
  <a href="angkatan/create" class="btn-blue">Tambahkan Data Kelas</a>
  @if (session('success'))
    <div class="alert-success">
       <p>{{ session('success') }}</p> 
    </div>
@endif
  <table style="width:100%; margin-top: 25px">
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
        <td style="width: 100px"><button class="btn-green"><a href="{{ route('angkatan.edit', $angkat->id) }}">Edit</a></button></td>
  <form method="POST" action="{{ url('angkatan', $angkat->id ) }}">
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