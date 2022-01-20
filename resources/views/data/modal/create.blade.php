<form action="{{ url('data') }}" method="POST">
{{csrf_field()}}
    <div class="modal fade text-left" id="GuruModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Buat Data Baru</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nip" class="form-label">NIP</label>
                        <input name="nip" class="form-control" id="nip" placeholder="Tambahkan NIP">
                    </div>
                    <div class="mb-3">
                        <label for="nama_guru" class="form-label">Nama Guru</label>
                        <input name="nama_guru" class="form-control" id="nama_guru" placeholder="Tambahkan Nama Guru">
                    </div>
                    <div class="mb-3">
                        <label for="mata_pelajaran" class="form-label">Mata Pelajaran</label>
                        <input name="mata_pelajaran" type="text" class="form-control" id="mata_pelajaran" placeholder="Tambahkan Mata Pelajaran">
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