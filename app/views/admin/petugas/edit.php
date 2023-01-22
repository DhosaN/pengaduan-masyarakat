<div class="container-fluid">
    <div class="col">
        <div class="row">
            <a href="<?= BASE_URL ?>/admin/detailpetugas/<?= $data['petugas']['id_petugas'] ?>" class="btn btn-primary btn-icon-split mb-3 mr-3">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Kembali ke detail petugas</span>
            </a>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Petugas</h6>
        </div>
        <div class="card-body">
            <form action="<?= BASE_URL ?>/admin/updatepetugas/<?= $data['petugas']['id_petugas'] ?>" method="POST">
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="namaInput">Nama Lengkap Petugas</label>
                        <input type="text" name="nama" id="namaInput" class="form-control" value="<?= $data['petugas']['nama_petugas'] ?>" required>
                        <small class="form-text text-muted">Masukkan nama petugas pada kolom ini.</small>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="usernameInput">Username Petugas</label>
                        <input type="text" name="username" id="usernameInput" class="form-control" value="<?= $data['petugas']['username'] ?>" required>
                        <small class="form-text text-muted">Masukkan username petugas pada kolom ini.</small>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="emailInput">Email</label>
                        <input type="email" name="email" id="emailInput" class="form-control" value="<?= $data['petugas']['email'] ?>" required>
                        <small class="form-text text-muted">Masukkan email petugas pada kolom ini. Pastikan email yang ditulis adalah email valid, ya!</small>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="telpInput">No. Telp</label>
                        <input type="text" name="telp" id="telpInput" class="form-control" value="<?= $data['petugas']['telp'] ?>" required>
                        <small class="form-text text-muted">Masukkan nomor telepon petugas pada kolom ini.</small>
                    </div>
                </div>
                <div class="form-group">
                    <label for="idLevelInput">Level</label>
                    <select name="level" id="idLevelInput" class="form-control" required>
                        <option value="<?= $data['petugas']['id_level'] ?>"><?= $data['petugas']['nama_level'] ?></option>
                        <?php foreach($data['level'] as $level): ?>
                            <option value="<?= $level['id_level'] ?>"><?= $level['nama_level'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <small class="form-text text-muted">Pilih hak akses untuk petugas. Anda dapat menggantinya juga setelah data petugas tersimpan.</small>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>