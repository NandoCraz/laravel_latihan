@extends('layouts.main')
@section('dataTitle', 'Edit Data')
@section('content')
<div class="wrapper">
  <h1>Edit Data Kelas</h1>

  <a href="/walkel" class="btn-red" style="padding: 5px; border-radius: 4px;" ><button class="btn btn-secondary">Kembali</button></a>
  
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

  
  
  <form method="POST" style="margin-top: 20px" action="{{ url('walkel') }}">
    @csrf
    <div class="mb-3">
      <label for="guru" class="form-label">Nama Guru</label>
      <select name="id_guru" id="guru" class="form-control form-select">
        <option value="" selected disabled>Pilih Guru</option>
            @foreach ($data as $gr)
                <option value="{{ $gr->id }}" 
                    @if ($gr->id == $walkel->id_guru)
                        selected            
                    @endif> {{ $gr->nama_guru }}
                </option>                          
            @endforeach
        </select>
    </div>
    <div class="mb-3">
      <label for="kelas" class="form-label">Kelas</label>
      <select name="id_angkatan" id="kelas" class="form-control form-select">
        <option value="" selected disabled>Pilih Kelas</option>
            @foreach ($angkatans as $angkat)
                <option value="{{ $angkat->id }}" 
                    @if ($angkat->id == $walkel->id_kelas)
                        selected            
                    @endif> {{ $angkat->kelas }}
                </option>                          
            @endforeach
        </select>
    </div>
    <div class="mb-3">
      <label for="jurusan" class="form-label">Jurusan</label>
      <select name="id_jurusan" id="jurusan" class="form-control form-select">
        <option value="" selected disabled>Pilih Jurusan</option>
            @foreach ($angkatans as $angkat)
                <option value="{{ $angkat->id }}" 
                    @if ($angkat->id == $walkel->jurusan)
                        selected            
                    @endif> {{ $gr->jurusan }}
                </option>                          
            @endforeach
        </select>
    </div>
    <div class="mb-3">
      <label for="ruangan" class="form-label">Ruangan</label>
      <select name="id_ruangan" id="ruangan" class="form-control form-select">
        <option value="" selected disabled>Pilih Ruangan</option>
            @foreach ($kelas as $ruang)
                <option value="{{ $ruang->id }}" 
                    @if ($ruang->id == $walkel->id_guru)
                        selected            
                    @endif> {{ $ruang->nama_guru }}
                </option>                          
            @endforeach
        </select>
    </div>
    <div class="mb-3">
    <label for="tahun_ajaran" class="form-label">Tahun Ajar</label>
      <input name="tahun_ajaran" value="{{ $walkel->tahun_ajaran }}" type="text" class="form-control" id="nama_ruangan" placeholder="Ubah Tahun Ajaran">
    </div>
    <button class="btn btn-primary">Submit</button>
  </form>

  </form>
</div>
@endsection