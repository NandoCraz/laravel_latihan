@extends('layouts.main')
@section('dataTitle', 'Edit Data')
@section('content')
<div class="wrapper">
  <h1>Edit Data User</h1>
  <a href="/user" class="btn-red" style="padding: 5px; border-radius: 4px;" ><button class="btn btn-secondary">Kembali</button></a>

  
  
  @if (session('success'))
  <div class="alert alert-success" style="margin-top: 15px" role="alert">
    <p>{{ session('success') }}</p>
  </div>
  @endif
  
  @if ($errors->any())
  <div class="alert alert-warning" style="margin-top: 15px" role="alert">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <div class="row">
    <div class="card col-4 m-4">
      <div class="card-header">
        Edit Profile
      </div>
          <form action="{{'/user/edit'}}/{{$user->id}}" method="POST" style="margin-top: 20px" action="{{ url('user') }}">
          @csrf
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input name="name" value="{{ $user->name }}" type="text" class="form-control" id="name" placeholder="Ubah Nama">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" value="{{ $user->email }}" type="text" class="form-control" id="email" placeholder="Ubah Email">
          </div>
          <button class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="card col-4 m-4">
      <div class="card-header">
        Reset Password
      </div>
        <form method="POST" style="margin-top: 20px" action="{{'/user/reset'}}/{{$user->id}}">
          @csrf
          <div class="mb-3">
            <label for="old_pass" class="form-label">Password Lama</label>
            <input name="old_pass" type="password" class="form-control" id="old_pass" placeholder="Masukkan Password lama">
          </div>
          <div class="mb-3">
            <label for="new_pass" class="form-label">Password Baru</label>
            <input name="new_pass" type="password" class="form-control" id="new_pass" placeholder="Masukkan Password Baru">
          </div>
          <div class="mb-3">
            <label for="conf_pass" class="form-label">Konfirmasi Password Baru</label>
            <input name="conf_pass" type="password" class="form-control" id="conf_pass" placeholder="Konfirmasi Password Baru">
          </div>
          <button class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>

  
  
  
</div>
@endsection