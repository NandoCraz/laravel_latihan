<form action="{{ url('angkatan') }}" method="POST">
{{csrf_field()}}
    <div class="modal fade text-left" id="AngkatanModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Buat Data Baru</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input name="kelas" class="form-control" id="kelas" placeholder="Tambahkan Kelas">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input name="jurusan" type="text" class="form-control" id="jurusan" placeholder="Tambahkan Jurusan">
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