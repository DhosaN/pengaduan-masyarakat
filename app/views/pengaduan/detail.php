<div class="container-fluid">
    <div class="col mb-4">
        <a href="<?= BASE_URL ?>/pengaduan" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>

    </div>
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-body">
                <h3 class="font-weight-bold text-grey-800"><?= $data['aduan']['judul'] ?? 'Judul Laporan' ?></h3>
                <p>Ditulis oleh: <span class="font-weight-bold text-primary"> <?= $data['aduan']['nama'] ?></span></p>

                <hr>

                <p><?= $data['aduan']['aduan'] ?></p>
            </div>
        </div>
    </div>
</div>