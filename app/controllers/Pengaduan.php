<?php

class Pengaduan extends Controller {
    public function index()
    {
        $this->view('templates/header');
        $this->view('pengaduan/index');
        $this->view('templates/footer');
    }

    public function store($data)
    {

    }
}