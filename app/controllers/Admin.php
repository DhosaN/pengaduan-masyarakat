<?php

class Admin extends Controller {
    public function index()
    {
        if (empty($_SESSION['user']))
        {
            header('location: ' . BASE_URL . '/login');
            exit;
        }
        if ($_SESSION['user']['id_level'] == 1)
        {
            header('location: ' . BASE_URL . '/login');
            exit;
        }

        $data = [
            'title' => 'Dashboard',
            'controller' => 'admin',
        ];

        $this->view('templates/header', $data);
        $this->view('admin/dashboard/index', $data);
        $this->view('templates/footer');
    }
}