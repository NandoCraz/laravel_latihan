<form action="{{ url('siswa') }}" method="POST">
{{csrf_field()}}
    <div class="modal fade text-left" id="modalSiswa" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Buat Data Baru</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="no_absen" class="form-label">No. Absen</label>
                        <input name="no_absen" class="form-control" id="no_absen" placeholder="Tambahkan No. Absen">
                    </div>
                    <div class="mb-3">
                        <label for="nama_siswa" class="form-label">Nama Siswa</label>
                        <input name="nama_siswa" class="form-control" id="nama_siswa" placeholder="Tambahkan Nama Siswa">
                    </div>
                    <div class="mb-3">
                        <label for="keahlian_bidang" class="form-label">Bidang Keahlian</label>
                        <input name="keahlian_bidang" type="text" class="form-control" id="keahlian_bidang" placeholder="Tambahkan Keahlian">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                    <button class="btn btn-primary btn-sm">Submit</button>
                </div>
            </div>
        </div>
    </div>

</form>