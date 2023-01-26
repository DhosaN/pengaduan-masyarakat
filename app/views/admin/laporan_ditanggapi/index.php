                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Laporan Masuk</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-right">#</th>
                                            <th>Judul Laporan</th>
                                            <th>Pelapor</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th class="text-right">#</th>
                                            <th>Judul Laporan</th>
                                            <th>Pelapor</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($data['laporan'] as $laporan): ?>
                                            <tr>
                                                <td class="text-right">
                                                    <div class="dropdown no-arrow">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-500"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <div class="dropdown-header">Aksi</div>
                                                            <a class="dropdown-item" href="<?= BASE_URL ?>/admin/detaillaporan/<?= $laporan['id_aduan'] ?>">Detail Laporan</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><?=$laporan['judul']?></td>
                                                <td><?=$laporan['nama']?></td>
                                                <td><?=$laporan['email']?></td>
                                                <td class="font-weight-bold text-<?=$laporan['status']=='diproses'?'warning':'success'?>"><?=$laporan['status']?></td>
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