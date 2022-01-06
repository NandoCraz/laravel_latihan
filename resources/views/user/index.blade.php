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
  <table style="width:100%; margin-top: 25px" class="table table-striped border-dark text-center">
    <thead class="table-dark">
      <tr>
        <th>Username</th>
        <th>Email</th>
        <th colspan="2">Edit</th>
      </tr>
    </thead>
    <tbody>
   
      @foreach ($users as $us)
      <tr>
        <td style="width: 300px" >{{ $us->name}}</td>
        <td style="width: 300px" >{{ $us->email}}</td>      
        <td><a href="user/delete/{{$us->id}}" class="btn btn-danger">Hapus</a></td>
        <td><a href="user/edit/{{$us->id}}" class="btn btn-primary">Edit</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection