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
        $data = [
            'title' => 'Tambah Petugas',
            'controller' => 'admin',
        ];

        $this->view('templates/header', $data);
        $this->view('admin/petugas/create');
        $this->view('templates/footer');
    }
}