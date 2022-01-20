@extends('layouts.main')
@section('dataTitle', 'Data Semua Kelas')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Data CRUD Semua Kelas</h1>
  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AngkatanModal" style="margin-bottom: 15px">Tambahkan Data Angkatan Kelas</button>

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
  <table id="table_id" style="width:100%; margin-top: 25px" class="table table-striped border-dark text-center">
    <thead class="table-dark">
      <tr>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($angkatan as $angkat)
      <tr>
        <td style="width: 200px" >{{ $angkat->kelas}}</td>
        <td style="width: 500px" >{{ $angkat->jurusan }}</td>
        <td style="width: 410px; display: flex; justify-content: center">
          <a href="{{ route('angkatan.edit', $angkat->id) }}"><button class="btn btn-success btn-sm mr-3">Edit</button></a>
           <button type="button" class="btn btn-danger btn-sm" onclick="modal('{{$angkat->id}}')">Hapus</button>
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
@include('angkatan.modal.create')
@endsection
@section('jscript')
<script>
  function modal(id){
    $('#deleteModal').modal('show');
    $('#url').attr('href','/angkatan/delete/'+id);
  }
</script>
@endsection