@extends('layouts.main')
@section('dataTitle', 'Data Wali Kelas')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Data CRUD Wali Kelas</h1>
  
  <a href="walkel/create"><button class="btn btn-primary" style="margin-bottom: 15px">Tambahkan Data Wali Kelas</button></a>
  @if (session('success'))
    <div class="alert alert-danger" role="alert">
       <p>{{ session('success') }}</p> 
    </div>
  @endif
  <table id="table_id" style="width:100%; margin-top: 25px" class="table table-striped border-dark text-center display">
    <thead class="table-dark">
      <tr>
        <th>Nama Guru</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Nama Ruangan</th>
        <th>Tahun Ajaran</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($wali as $wl)
      <tr>
        <td style="width: 200px" >{{ $wl->nama_guru}}</td>
        <td style="width: 100px" >{{ $wl->kelas }}</td>
        <td style="width: 100px" >{{ $wl->jurusan}}</td>
        <td style="width: 200px" >{{ $wl->nama_ruangan }}</td>
        <td style="width: 200px" >{{ $wl->tahun_ajaran }}</td>
        <td style="width: 200px; display: flex; justify-content: center">
            <a href="{{ route('walkel.edit', $wl->id) }}"><button class="btn btn-success btn-sm mr-3">Edit</button></a>
            <button type="button" class="btn btn-danger btn-sm" onclick="modal('{{$wl->id}}')">Hapus</button>
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
@endsection
@section('jscript')
<script>
  function modal(id){
    $('#deleteModal').modal('show');
    $('#url').attr('href','/siswa/delete/'+id);
  }
</script>
@endsection