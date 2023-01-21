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

    public function petugas($page = 'index')
    {
        Middleware::onlyAdmin();

        switch($page) {
            case 'index':
                $this->petugasIndex();
                break;
            case 'create':
                $this->petugasCreate();
                break;
            case 'store':
                $this->petugasStore();
                break;
            default:
                header('location: ' . BASE_URL . '/login');
                exit;
        }

    }

    public function petugasIndex()
    {
        $petugas = $this->model('petugas_model')->getAllPetugas();

        $data = [
            'title' => 'Petugas',
            'controller' => 'admin',
            'petugas' => $petugas,
        ];

        $this->view('templates/header', $data);
        $this->view('admin/petugas/index', $data);
        $this->view('templates/footer');
    }

    public function petugasCreate()
    {
        $level = $this->model('level_model')->getAllLevel();

        $data = [
            'title' => 'Tambah Petugas',
            'controller' => 'admin',
            'level' => $level,
        ];

        $this->view('templates/header', $data);
        $this->view('admin/petugas/create', $data);
        $this->view('templates/footer');
    }

    public function petugasStore()
    {
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
}