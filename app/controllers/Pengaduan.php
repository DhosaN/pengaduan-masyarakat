<?php

class Pengaduan extends Controller {
    public function index()
    {
        $aduan = $this->model('aduan_model')->getAllAduan();
        
        $data = [
            'title' => 'Pengaduan',
            'controller' => 'pengaduan',
            'aduan' => $aduan,
        ];

        $this->view('templates/header', $data);
        $this->view('pengaduan/index', $data);
        $this->view('templates/footer');
    }

    public function create()
    {
        $data = [
            'title' => 'Ajukan Pengaduan',
            'controller' => 'pengaduan',
        ];

        $this->view('templates/header', $data);
        $this->view('pengaduan/create');
        $this->view('templates/footer', $data);
    }

    public function detail($id = null)
    {
        $aduan = $this->model('aduan_model')->getAduanById($id);

        $data = [
            'title' => 'Detail Laporan',
            'controller' => 'pengaduan',
            'aduan' => $aduan,
        ];

        $this->view('templates/header', $data);
        $this->view('pengaduan/detail', $data);
        $this->view('templates/footer', $data);
    }

    public function store()
    {
        $data = [
            'nama' => $_POST['nama'],
            'email' => $_POST['email'],
            'judul' => $_POST['judul'],
            'aduan' => $_POST['aduan'],
        ];

        // foreach($data as $key => $value)
        // {
        //     if (!$this->validateLength($value, 8))
        //     {
        //         $_SESSION['invalid'][$key] = 'minimal mengandung 8 karakter!';
        //     }
        // }

        // if (isset($_SESSION['invalid']))
        // {
        //     header('location: ' . BASE_URL . '/pengaduan');
        //     exit;
        // }

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

    public function validateLength($data, $minLength) 
    {
        return strlen($data) >= $minLength;
    }
}