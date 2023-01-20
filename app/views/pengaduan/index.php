<div class="container-fluid">
    <h5 class="font-weight-bold">Laporan Masyarakat</h5>
    <p>Laman ini menyediakan laporan masyarakat yang sudah diterima. Anda dapat coba mencari laporan serupa sebelum mengajukan laporan, ya!</p>

    <div class="card mb-4">
        <div class="card-body">
                <form action="<?= BASE_URL ?>/pengaduan/search" method="POST"
                    class="form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Cari laporan di sini ..."
                            aria-label="Search" aria-describedby="basic-addon2" name="search">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            
            <?php if(empty($data['aduan'])): ?>
                <div class="col my-4">
                    <h6 class="text-primary font-weight-bold text-center">Laporan tidak ditemukan. Coba cari dengan kata kunci lain.</h6>
                </div>
            <?php endif ?>

            <?php foreach($data['aduan'] as $aduan): ?>
                <div class="col my-4">
                    <a href="<?= BASE_URL ?>/pengaduan/detail/<?= $aduan['id_aduan'] ?>" class="m-0 font-weight-bold text-primary"><?= $aduan['judul'] ?? 'Judul Laporan' ?></a>
                    <p>Ditulis oleh: <?= $aduan['nama'] ?></p>
                    <hr>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>