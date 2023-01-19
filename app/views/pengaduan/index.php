<div class="container-fluid">
    <h5 class="font-weight-bold">Ajukan Aduan</h5>
    <div class="card mb-4">
        <div class="card-body">
            <form action="<?=BASE_URL?>/pengaduan/store" method="POST" id="aduanForm">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="nameInput">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" id="nameInput" placeholder="contoh: Rudy Santoso" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="emailInput">Email</label>
                    <input type="email" class="form-control" name="email" id="emailInput" placeholder="contoh: rudysantoso@email.com" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="aduanInput">Aduan</label>
            <textarea class="form-control" name="aduan" id="aduanInput" rows="12"></textarea required>
        </div>
        </form>
            <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#kirimModal">Kirim Laporan!</a>
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
