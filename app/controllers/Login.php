<?php

class Login extends Controller {
    public function index()
    {
        $this->view('templates/auth/header');
        $this->view('login/index');
        $this->view('templates/auth/footer');
    }
}