<form action="{{ action('WalkelController@store') }}" method="post">
@csrf
    <div class="modal fade text-left" id="CreateModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Buat Data Baru</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="guru" class="form-label">Nama Guru</label>
                        <select name="id_guru" id="guru" class="form-control">
                            <option value="" selected disabled>Pilih Guru</option>
                            @foreach ($guru as $gr)
                                <option value="{{$gr->id}}">{{$gr->nama_guru}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select name="id_angkatan" id="kelas" class="form-control">
                            <option value="" selected disabled>Pilih Kelas</option>
                            @foreach ($angkatan as $angkat)
                                <option value="{{$angkat->id}}">{{$angkat->kelas}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select name="id_jurusan" id="jurusan" class="form-control">
                            <option value="" selected disabled>Pilih Jurusan</option>
                            @foreach ($angkatan as $angkat)
                                <option value="{{$angkat->id}}">{{$angkat->jurusan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="ruangan" class="form-label">Ruangan</label>
                        <select name="id_ruangan" id="kelas" class="form-control">
                            <option value="" selected disabled>Pilih Ruangan</option>
                            @foreach ($ruangan as $ruang)
                                <option value="{{$ruang->id}}">{{$ruang->nama_ruangan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tahun_ajaran" class="form-label">Nama Ruangan</label>
                        <input name="tahun_ajaran" type="text" class="form-control" id="tahun_ajaran" placeholder="Tambahkan Tahun Ajaran">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

</form>