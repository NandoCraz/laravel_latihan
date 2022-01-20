@extends('layouts.main')
@section('dataTitle', 'Data Semua User')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Data User</h1>
  
  <!-- <a href="kelas/create" class="btn-blue"><button class="btn btn-primary" style="margin-bottom: 15px">Tambahkan Data Ruangan</button></a> -->
  @if (session('success'))
    <div class="alert alert-danger" role="alert">
       <p>{{ session('success') }}</p> 
    </div>
@endif
  <table style="width:100%; margin-top: 25px" id="table_id" class="table table-striped border-dark text-center display">
    <thead class="table-dark">
      <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
   
      @foreach ($users as $us)
      <tr>
        <td style="width: 300px" >{{ $us->name}}</td>
        <td style="width: 300px" >{{ $us->email}}</td>      
        <td style="display:flex; justify-content: center">
          <a href="user/edit/{{$us->id}}" class="btn btn-success btn-sm mr-3">Edit</a>
          <button type="button" class="btn btn-danger btn-sm" onclick="modal('{{$us->id}}')">Hapus</button>
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
        <a href="" class="btn btn-danger btn-sm" id="url">Hapus</a>
      </div>
    </div>
  </div>
</div>
@endsection
@section('jscript')
<script>
  function modal(id){
    $('#deleteModal').modal('show');
    $('#url').attr('href','/user/delete/'+id);
  }
</script>
@endsection