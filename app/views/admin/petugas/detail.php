<div class="container-fluid">
    <div class="col">
        <div class="row">
            <a href="<?= BASE_URL ?>/admin/daftarpetugas" class="btn btn-primary btn-icon-split mb-3 mr-3">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Kembali ke daftar petugas</span>
            </a>

            <a href="<?= BASE_URL ?>/admin/editpetugas/<?= $data['petugas']['id_petugas'] ?>" class="btn btn-warning btn-icon-split mb-3 mr-3">
                <span class="icon text-white-50">
                    <i class="fas fa-edit"></i>
                </span>
                <span class="text">Edit</span>
            </a>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Petugas</h6>
        </div>
        <div class="card-body">
            <form action="<?= BASE_URL ?>/admin/petugas/store" method="POST">
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="namaInput">Nama Lengkap Petugas</label>
                        <input type="text" name="nama" id="namaInput" class="form-control" value="<?= $data['petugas']['nama_petugas'] ?>" disabled>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="usernameInput">Username Petugas</label>
                        <input type="text" name="username" id="usernameInput" class="form-control" value="<?= $data['petugas']['username'] ?>" disabled>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="emailInput">Email</label>
                        <input type="email" name="email" id="emailInput" class="form-control" value="<?= $data['petugas']['email'] ?>" disabled>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="telpInput">No. Telp</label>
                        <input type="text" name="telp" id="telpInput" class="form-control" value="<?= $data['petugas']['telp'] ?>" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="idLevelInput">Level</label>
                        <input type="text" name="nama_level" id="nama_level" class="form-control" value="<?= $data['petugas']['nama_level'] ?>" disabled>
                </div>
            </form>
        </div>
    </div>
</div>