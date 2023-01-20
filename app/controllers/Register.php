<?php

class Register extends Controller {
    public function index()
    {
        $this->view('templates/auth/header');
        $this->view('register/index');
        $this->view('templates/auth/footer');
    }

    public function store()
    {
        $data = [
            'id_level' => 1,
            'nama_petugas' => $_POST['nama'],
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'telp' => $_POST['telp'],
            'password' => $_POST['password'],
        ];

        // encrypt password
        $data['password'] = md5($data['password']);

        // if insert petugas data successfull then direct to login page
        if ($this->model('petugas_model')->addPetugas($data) > 0)
        {
            header('location: ' . BASE_URL . '/login');
            exit;
        }

        header('location: ' . BASE_URL . '/register');
        exit;
    }
}