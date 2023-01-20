<?php

class Login extends Controller {
    public function index()
    {
        $this->view('templates/auth/header');
        $this->view('login/index');
        $this->view('templates/auth/footer');
    }

    public function sign()
    {
        $data = [
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];

        // encrypt password
        $data['password'] = md5($data['password']);

        $user = $this->model('petugas_model')->getPetugasByEmailAndPassword($data);

        // if user founded then set session based on founded data
        if ($user)
        {
            unset($_SESSION['user']);

            $_SESSION['user'] = [
                'id_petugas' => $user['id_petugas'],
                'nama_petugas' => $user['nama_petugas'],
                'username' => $user['username'],
                'email' => $user['email'],
                'telp' => $user['telp'],
                'id_level' => $user['id_level'],
            ];

            header('location: ' . BASE_URL);
            exit;
        }

        header('location: ' . BASE_URL . '/login');
        exit;
    }
}