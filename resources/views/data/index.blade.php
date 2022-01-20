@extends('layouts.main')
@section('dataGuru', 'Semua data')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Data CRUD Guru</h1>
  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#GuruModal"  style="margin-bottom: 15px">Tambahkan Data Guru</button>

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
  <table id="table_id" style="width:100%; margin-top: 20px" class="table table-striped border-dark text-center display">
    <thead class="table-dark">
      <tr>
        <th>NIP</th>
        <th>Nama Guru</th>
        <th>Mata Pelajaran</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($datas as $data)
      <tr>
        <td style="width: 200px" >{{ $data->nip}}</td>
        <td style="width: 500px" >{{ $data->nama_guru }}</td>
        <td style="width: 200px">{{ $data->mata_pelajaran }}</td>
        <td style="width: 210px; display: flex; justify-content: center">
              <a href="{{ route('data.edit', $data->id) }}"><button class="btn btn-success btn-sm mr-3">Edit</button></a>
              <button type="button" class="btn btn-danger btn-sm" onclick="modal('{{$data->id}}')">Hapus</button>
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
@include('data.modal.create')
@endsection
@section('jscript')
<script>
  function modal(id){
    $('#deleteModal').modal('show');
    $('#url').attr('href','/data/delete/'+id);
  }
</script>
@endsection