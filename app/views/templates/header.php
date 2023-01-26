<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pengaduan Masyarakat | <?= $data['title'] ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?=BASE_URL?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=BASE_URL?>/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="<?=BASE_URL?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=BASE_URL?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Pengaduan Masyarakat</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <?php if(empty($_SESSION['user'])): ?>
                <!-- Nav Item - Home -->
                <li class="nav-item <?= $data['controller'] == 'home' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?=BASE_URL?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Home</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Pengaduan
                </div>

                <li class="nav-item <?= $data['controller'] == 'pengaduan' ? 'active' : '' ?>">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                        aria-controls="collapseTwo">
                        <i class="fa fa-inbox"></i>
                        <span>Laporan</span>
                    </a>
                    <div id="collapseTwo" class="collapse <?= $data['controller'] == 'pengaduan' ? 'show' : '' ?>" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item <?= $data['title'] == 'Pengaduan' || $data['title'] == 'Detail Laporan' ? 'active' : '' ?>" href="<?= BASE_URL ?>/pengaduan">Laporan Masyarakat</a>
                            <a class="collapse-item <?= $data['title'] == 'Ajukan Pengaduan' ? 'active' : '' ?> " href="<?= BASE_URL ?>/pengaduan/create">Ajukan Laporan</a>
                        </div>
                    </div>
                </li>
            <?php elseif($_SESSION['user']['id_level'] == 2): ?>
                <!-- Nav Item - Dashboard -->
                <li class="nav-item <?= $data['title'] == 'Dashboard' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?=BASE_URL?>/admin">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <hr class="sidebar-divider"></hr>

                <!-- Heading -->
                <div class="sidebar-heading">
                    Admin
                </div>

                <li class="nav-item <?= $data['controller'] == 'pengaduan' ? 'active' : '' ?>">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseAdmin" aria-expanded="true"
                        aria-controls="collapseAdmin">
                        <i class="fa fa-user"></i>
                        <span>Admin</span>
                    </a>
                    <div id="collapseAdmin" class="collapse <?= $data['controller'] == 'pengaduan' ? 'show' : '' ?>" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Laporan</h6>
                            <a class="collapse-item <?= $data['title'] == 'Pengaduan' || $data['title'] == 'Detail Laporan' ? 'active' : '' ?>" href="<?= BASE_URL ?>/admin/laporanmasuk">Laporan Masuk</a>
                            <a class="collapse-item <?= $data['title'] == 'Ajukan Pengaduan' ? 'active' : '' ?> " href="<?= BASE_URL ?>/pengaduan/create">Laporan Ditanggapi</a>
                        </div>
                    </div>
                </li>

                <hr class="sidebar-divider"></hr>

                <!-- Heading -->
                <div class="sidebar-heading">
                    Petugas
                </div>

                <li class="nav-item <?= $data['controller'] == 'pengaduan' ? 'active' : '' ?>">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePetugas" aria-expanded="true"
                        aria-controls="collapsePetugas">
                        <i class="fa fa-user"></i>
                        <span>Petugas</span>
                    </a>
                    <div id="collapsePetugas" class="collapse <?= $data['controller'] == 'pengaduan' ? 'show' : '' ?>" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <!-- <h6 class="collapse-header">Laporan</h6> -->
                            <a class="collapse-item <?= $data['title'] == 'Pengaduan' || $data['title'] == 'Detail Laporan' ? 'active' : '' ?>" href="<?= BASE_URL ?>/admin/daftarpetugas">Daftar Petugas</a>
                            <a class="collapse-item <?= $data['title'] == 'Ajukan Pengaduan' ? 'active' : '' ?> " href="<?= BASE_URL ?>/admin/createpetugas">Tambah Petugas</a>
                        </div>
                    </div>
                </li>

            <?php endif ?>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=isset($_SESSION['user']) ? $_SESSION['user']['nama_petugas'] : 'Login' ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?= BASE_URL ?>/img/undraw_profile.svg">
                            </a>

                            <?php if(isset($_SESSION['user'])): ?>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                            <?php else: ?>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?=BASE_URL?>/login">
                                    <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Login sebagai petugas
                                </a>
                                <div class="dropdown-divider"></div>
                            </div>
                            <?php endif ?>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->