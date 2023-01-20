<?php

class Register extends Controller {
    public function index()
    {
        $this->view('templates/auth/header');
        $this->view('register/index');
        $this->view('templates/auth/footer');
    }
}