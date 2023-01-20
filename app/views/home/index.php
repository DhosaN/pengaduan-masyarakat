<div class="container-fluid">
    <div class="jumbotron bg-grey">
        <h1 class="display-4">Selamat Datang!</h1>
        <p class="lead">Website ini adalah tempat masyarakat menyampaikan aspirasi, keluhan, serta saran secara daring</p>
        <hr class="my-4">
        <p>Punya sesuatu untuk disampaikan? klik tombol di bawah ini ya!</p>
        <a href="<?=BASE_URL?>/pengaduan/create" class="btn btn-lg btn-primary">Tulis laporan</a>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Laporan Terbaru</h1>
    </div>

    <div class="row">
        <?php foreach($data['aduan'] as $aduan): ?>
            <div class="col-xl-4 col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <a class="h6 m-0 font-weight-bold text-primary" href="#"><?= $aduan['judul'] ?? 'Judul Laporan' ?></a>
                    </div>
                    <div class="card-body">
                        Dilaporkan oleh: <?= $aduan['nama'] ?>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>