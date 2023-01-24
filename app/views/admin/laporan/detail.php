<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Laporan</h6>
                </div>
                <div class="card-body">
                    <div class="col p-0 mb-2">
                        <h6 class="m-0 font-weight-bold text-gray-800">Judul Laporan</h6>
                        <p><?= $data['laporan']['judul'] ?></p>
                    </div>
                    <div class="col p-0 mb-2">
                        <h6 class="m-0 font-weight-bold text-gray-800">Dilaporkan Oleh</h6>
                        <p><?= $data['laporan']['nama'] ?> (<?=$data['laporan']['email']?>)</p>
                    </div>
                    <div class="col p-0 mb-2">
                        <h6 class="m-0 font-weight-bold text-gray-800">Laporan</h6>
                        <p><?= $data['laporan']['aduan'] ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Berikan Tanggapan</h6>
                </div>
                <div class="card-body">
                    <form action="<?=BASE_URL?>/admin/tanggapilaporan/<?=$laporan['id_aduan']?>" method="POST">
                        <div class="form-group">
                            <label for="tanggapanInput">Tanggapan Laporan</label>
                            <textarea name="" id="" cols="30" rows="15" class="form-control" required></textarea>
                            <small class="form-text text-muted">Masukkan tanggapan laporan pada kolom ini.</small>
                        </div>

                        <button type="submit" class="btn btn-primary">Tanggapi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>