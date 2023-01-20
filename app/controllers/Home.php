<?php

class Home extends Controller {
    public function index()
    {
        $aduan = $this->model('aduan_model')->getLatestAduan(6);

        $data = [
            'title' => 'Home',
            'controller' => 'home',
            'aduan' => $aduan,
        ];

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}