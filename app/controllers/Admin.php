<?php

class Admin extends Controller {

    // dashboard section
    public function index()
    {
        Middleware::onlyAdmin();
        $laporan = $this->model('aduan_model')->getAllAduan();
        $petugas = $this->model('petugas_model')->getAllPetugas();

        $data = [
            'title' => 'Dashboard',
            'controller' => 'admin',
            'laporan' => $laporan,
            'petugas' => $petugas,
        ];

        $this->view('templates/header', $data);
        $this->view('admin/dashboard/index', $data);
        $this->view('templates/footer');
    }
    // end of dashboard section

    // petugas section
    public function daftarPetugas()
    {
        Middleware::onlyAdmin();

        $petugas = $this->model('petugas_model')->getAllPetugas();

        $data = [
            'title' => 'Daftar Petugas',
            'controller' => 'adminPetugas',
            'petugas' => $petugas,
        ];

        $this->view('templates/header', $data);
        $this->view('admin/petugas/index', $data);
        $this->view('templates/footer');
    }

    public function createPetugas()
    {
        Middleware::onlyAdmin();

        $level = $this->model('level_model')->getAllLevel();

        $data = [
            'title' => 'Tambah Petugas',
            'controller' => 'adminPetugas',
            'level' => $level,
        ];

        $this->view('templates/header', $data);
        $this->view('admin/petugas/create', $data);
        $this->view('templates/footer');
    }

    public function storePetugas()
    {
        Middleware::onlyAdmin();

        $data = [
            'id_level' => $_POST['level'],
            'nama_petugas' => $_POST['nama'],
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'telp' => $_POST['telp'],
            'password' => 'Petugas123',
        ];

        // encrypt password
        $data['password'] = md5($data['password']);

        // verify if email already registered
        // if email matched, direct user back to admin/petugas/create page
        if ($this->model('petugas_model')->getPetugasEmail($data['email']) > 0)
        {
            $this->directTo('/admin/petugas/create');
        }

        if ($this->model('petugas_model')->addPetugas($data) > 0)
        {
            $this->directTo('/admin/petugas/create');
            exit;
        }
        $this->directTo('/admin/petugas/create');
        exit;
    }

    public function detailPetugas($id)
    {
        Middleware::onlyAdmin();

        $petugas = $this->model('petugas_model')->getPetugasById($id);

        $data = [
            'title' => 'Detail Petugas',
            'controller' => 'adminPetugas',
            'petugas' => $petugas,
        ];

        $this->view('templates/header', $data);
        $this->view('admin/petugas/detail', $data);
        $this->view('templates/footer');
    }

    public function editPetugas($id)
    {
        Middleware::onlyAdmin();

        $petugas = $this->model('petugas_model')->getPetugasById($id);
        $level = $this->model('level_model')->getAllLevel();

        $data = [
            'title' => 'Edit Petugas',
            'controller' => 'adminPetugas',
            'petugas' => $petugas,
            'level' => $level,
        ];

        $this->view('templates/header', $data);
        $this->view('admin/petugas/edit', $data);
        $this->view('templates/footer');
    }

    public function updatePetugas($id)
    {
        Middleware::onlyAdmin();

        $data = [
            'id_petugas' => $id,
            'id_level' => $_POST['level'],
            'nama_petugas' => $_POST['nama'],
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'telp' => $_POST['telp'],
        ];

        if ($this->model('petugas_model')->updatePetugas($data) > 0)
        {
            $this->directTo('/admin/editpetugas/' . $id);
        }
        $this->directTo('/admin/editpetugas/' . $id);
    }
    // end of petugas section

    // pengaduan section
    public function laporanMasuk()
    {
        Middleware::onlyAdmin();

        $laporan = $this->model('aduan_model')->getAduanByStatus('diproses', 'ASC');

        $data = [
            'title' => 'Laporan Masuk',
            'controller' => 'adminLaporan',
            'laporan' => $laporan,
        ];

        $this->view('templates/header', $data);
        $this->view('admin/laporan/index', $data);
        $this->view('templates/footer');
    }

    public function detailLaporan($id)
    {
        Middleware::onlyAdmin();

        $laporan = $this->model('aduan_model')->getAduanById($id);

        $data = [
            'title' => 'Detail Laporan',
            'controller' => 'adminLaporan',
            'laporan' => $laporan,
        ];

        $this->view('templates/header', $data);
        $this->view('admin/laporan/detail', $data);
        $this->view('templates/footer');
    }

    public function storeTanggapan($idAduan)
    {
        Middleware::onlyAdmin();

        $data = [
            'id_aduan' => $idAduan,
            'id_petugas' => $_SESSION['user']['id_petugas'],
            'tgl_tanggapan' => date('Y-m-d'),
            'tanggapan' => $_POST['tanggapan'],
            'status' => 'ditanggapi',
        ];

        if ($this->model('tanggapan_model')->addTanggapan($data) > 0 && $this->model('aduan_model')->updateAduanStatus($data) > 0)
        {
            $this->directTo('/admin/laporanmasuk');
        }
        $this->directTo('/admin/laporanmasuk');
    }

    public function laporanDitanggapi()
    {
        Middleware::onlyAdmin();

        $laporan = $this->model('aduan_model')->getAduanByStatus('ditanggapi', 'ASC');

        $data = [
            'title' => 'Laporan Ditanggapi',
            'controller' => 'adminPetugas',
            'laporan' => $laporan,
        ];

        $this->view('templates/header', $data);
        $this->view('admin/laporan_ditanggapi/index', $data);
        $this->view('templates/footer');
    }

    public function detailLaporanDitanggapi($id)
    {
        Middleware::onlyAdmin();

        $laporan = $this->model('aduan_model')->getAduanById($id);
        $tanggapan = $this->model('tanggapan_model')->getTanggapanByAduanId($id);

        $data = [
            'title' => 'Detail Laporan Ditanggapi',
            'controller' => 'adminPetugas',
            'laporan' => $laporan,
            'tanggapan' => $tanggapan,
        ];

        $this->view('templates/header', $data);
        $this->view('admin/laporan_ditanggapi/detail', $data);
        $this->view('templates/footer');
    }
    // end of pengaduan section
}