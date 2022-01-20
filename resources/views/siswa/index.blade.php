@extends('layouts.main')
@section('dataTitle', 'Daftar Siswa')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Data CRUD Siswa</h1>
  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSiswa" style="margin-bottom: 15px">Tambahkan Data Siswa</button>

@if (session('berhasil'))
<div class="alert alert-success" role="alert">
    <p>{{ session('berhasil') }}</p> 
</div>
@endif
@if (session('success'))
<div class="alert alert-danger" role="alert">
    <p>{{ session('success') }}</p> 
</div>
@endif
  <table style="width:100%; margin-top: 25px" id="table_id" class="table table-striped border-dark text-center display">
    <thead class="table-dark">
      <tr>
        <th>No. Absen</th>
        <th>Nama Siswa</th>
        <th>Bidang Keahlian</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($siswa as $sis)
      <tr>
        <td style="width: 200px" >{{ $sis->no_absen}}</td>
        <td style="width: 300px" >{{ $sis->nama_siswa }}</td>
        <td style="width: 300px" >{{ $sis->keahlian_bidang }}</td>
        <td style="width: 230px; display: flex; justify-content: center">
            <a href="{{ route('siswa.edit', $sis->id) }}"><button class="btn btn-success btn-sm mr-3">Edit</button></a>
            <button type="button" class="btn btn-danger btn-sm" onclick="modal('{{$sis->id}}')">Hapus</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div class="modal" tabindex="-1" id="deleteModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Anda Yakin Menghapus Data Ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
        <a href="" id="url" class="btn btn-danger btn-sm">Hapus</a>
      </div>
    </div>
  </div>
</div>
@include('siswa.modal.create')
@endsection
@section('jscript')
<script>
  function modal(id){
    $('#deleteModal').modal('show');
    $('#url').attr('href','/siswa/delete/'+id);
  }
</script>
@endsection