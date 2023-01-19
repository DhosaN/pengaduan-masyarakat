<?php

class Pengaduan extends Controller {
    public function index()
    {
        $this->view('templates/header');
        $this->view('pengaduan/index');
        $this->view('templates/footer');
    }

    public function store()
    {
        $data = [
            'nama' => $_POST['nama'],
            'email' => $_POST['email'],
            'aduan' => $_POST['aduan'],
        ];

        if ($this->model('aduan_model')->addAduan($data) > 0)
        {
            $_SESSION['success']['msg'] = 'laporan berhasil terkirim!';
            header('location: ' . BASE_URL);
        }
        else 
        {
            $_SESSION['error']['msg'] = 'terjadi kesalahan!';
            header('location: ' . BASE_URL . '/pengaduan');
        }
    }
}