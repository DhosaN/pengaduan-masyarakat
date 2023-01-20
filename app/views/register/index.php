    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-9 col-md-10">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Halo!</h1>
                                    </div>
                                    <form class="user" action="<?=BASE_URL?>/register/store" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="nama" id="namaRegisterInput"
                                                placeholder="Masukkan nama lengkap anda ..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="username" id="usernameRegisterInput"
                                                placeholder="Masukkan username anda ..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                name="email" id="emailLoginInput"
                                                placeholder="Masukkan alamat email ..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control form-control-user"
                                                name="telp" id="telpRegisterInput"
                                                placeholder="Masukkan nomor telepon anda ..." required>
                                            <small class="form-text text-muted">Masukkan tanpa angka 0. contoh (8123456789).</small>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="password" id="passwordLoginInput" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Register</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?=BASE_URL?>/login">Sudah punya akun petugas? Klik di sini.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>