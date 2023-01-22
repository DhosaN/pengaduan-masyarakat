<?php

class Admin extends Controller {
    public function index()
    {
        Middleware::onlyAdmin();

        $data = [
            'title' => 'Dashboard',
            'controller' => 'admin',
        ];

        $this->view('templates/header', $data);
        $this->view('admin/dashboard/index', $data);
        $this->view('templates/footer');
    }

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
            header('location: ' . BASE_URL . '/admin/petugas/create');
            exit;
        }

        if ($this->model('petugas_model')->addPetugas($data) > 0)
        {
            header('location: ' . BASE_URL . '/admin/petugas/create');
            exit;
        }
        header('location: ' . BASE_URL . '/admin/petugas/create');
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
            header('location: ' . BASE_URL . '/admin/editpetugas/' . $id);
            exit;
        }
        header('location: ' . BASE_URL . '/admin/editpetugas/' . $id);
        exit;
    }
}