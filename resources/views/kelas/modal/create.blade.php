<form action="{{ url('kelas') }}" method="POST">
{{csrf_field()}}
    <div class="modal fade text-left" id="KelasModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Buat Data Baru</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="no_ruangan" class="form-label">No. Ruangan</label>
                        <input name="no_ruangan" class="form-control" id="no_ruangan" placeholder="Tambahkan No. Ruangan">
                    </div>
                    <div class="mb-3">
                        <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
                        <input name="nama_ruangan" type="text" class="form-control" id="nama_ruangan" placeholder="Tambahkan Nama Ruangan">
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