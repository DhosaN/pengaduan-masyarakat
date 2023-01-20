<?php

class Pengaduan extends Controller {
    public function index()
    {
        $data = [
            'title' => 'Pengaduan',
            'controller' => 'pengaduan',
        ];

        $this->view('templates/header', $data);
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