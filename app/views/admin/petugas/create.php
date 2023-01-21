<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Petugas</h6>
        </div>
        <div class="card-body">
            <form action="<?= BASE_URL ?>/admin/petugas/store" method="POST">
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="namaInput">Nama Lengkap Petugas</label>
                        <input type="text" name="nama" id="namaInput" class="form-control" required autofocus>
                        <small class="form-text text-muted">Masukkan nama petugas pada kolom ini.</small>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="usernameInput">Username Petugas</label>
                        <input type="text" name="username" id="usernameInput" class="form-control" required>
                        <small class="form-text text-muted">Masukkan username petugas pada kolom ini.</small>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label for="emailInput">Email</label>
                        <input type="email" name="email" id="emailInput" class="form-control" required>
                        <small class="form-text text-muted">Masukkan email petugas pada kolom ini. Pastikan email yang ditulis adalah email valid, ya!</small>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="telpInput">No. Telp</label>
                        <input type="text" name="telp" id="telpInput" class="form-control" required>
                        <small class="form-text text-muted">Masukkan nomor telepon petugas pada kolom ini.</small>
                    </div>
                </div>
                <div class="form-group">
                    <label for="passwordInput">Password</label>
                    <input type="text" name="password" id="passwordInput" class="form-control" value="Petugas123" disabled>
                    <small class="form-text text-danger">Password ini adalah bawaan dari sistem. Pastikan petugas mengganti password setelah akun berhasil dibuat!</small>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>