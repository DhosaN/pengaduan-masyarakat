<div class="container-fluid">
    <h1 class="h3 text-gray-800 text-uppercase text-center">Ajukan Laporan</h1>
    <div class="card mb-4">
        <div class="card-body">
            <form action="<?=BASE_URL?>/pengaduan/store" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="namaInput">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="namaInput" required autofocus>
                        <small class="form-text text-muted">Masukkan nama anda pada kolom ini.</small>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="emailInput">Email</label>
                        <input type="email" class="form-control" name="email" id="emailInput" required>
                        <small class="form-text text-muted">Masukkan email anda pada kolom ini. Pastikan email yang anda masukkan valid, ya!</small>
                    </div>
                </div>
                <div class="form-group">
                    <label for="judulInput">Judul Laporan</label>
                    <input type="text" class="form-control" name="judul" id="judulInput" required>
                    <small class="form-text text-muted">Masukkan judul laporan anda di sini. Buat seringkas mungkin ya!</small>
                </div>
                <div class="form-group">
                    <label for="aduanInput">Aduan</label>
                    <textarea name="aduan" id="aduanInput" rows="12" class="form-control"></textarea>
                    <small class="form-text text-muted">Tulis pesan anda pada kolom ini. Pastikan pesan anda mengandung minimal 8 karakter, ya!</small>
                </div>
                <button type="submit" class="btn btn-primary btn-lg" id="btn-aduan-kirim">Kirim!</button>
            </form>
        </div>
    </div>
</div>

    <!-- kirim modal -->
    <div class="modal fade" id="kirimModal" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="kirimModalLabel">Yakin kirim laporan?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">laporan tidak dapat diubah, ditarik kembali setelah anda mengirimnya</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" id="btn-aduan-kirim">Kirim!</a>
                </div>
            </div>
        </div>
    </div>