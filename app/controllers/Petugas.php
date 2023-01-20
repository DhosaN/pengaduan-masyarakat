<?php

class Petugas extends Controller {
    public function index()
    {
        Middleware::onlyPetugas();

        $data = [
            'title' => 'Dashboard',
            'controller' => 'petugas',
        ];

        $this->view('templates/header', $data);
        $this->view('petugas/dashboard/index');
        $this->view('templates/footer');
    }
}