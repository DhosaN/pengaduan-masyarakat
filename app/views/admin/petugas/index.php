                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Petugas</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Petugas</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Telp</th>
                                            <th>Level</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Petugas</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Telp</th>
                                            <th>Level</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($data['petugas'] as $petugas): ?>
                                            <tr>
                                                <td><?=$petugas['nama_petugas']?></td>
                                                <td><?=$petugas['username']?></td>
                                                <td><?=$petugas['email']?></td>
                                                <td><?=$petugas['telp']?></td>
                                                <td><?=$petugas['nama_level']?></td>
                                                <td>
                                                    <div class="row">
                                                        <a href="<?= BASE_URL ?>/admin/detailpetugas/<?= $petugas['id_petugas'] ?>" class="btn btn-success mx-2">
                                                            <i class="fas fa-eye text-white-50"></i>
                                                        </a>
                                                        <a href="<?= BASE_URL ?>/admin/editpetugas/<?= $petugas['id_petugas'] ?>" class="btn btn-warning mx-2">
                                                            <i class="fas fa-edit text-white-50"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->