<?php

class Logout {
    public function index()
    {
        Middleware::onlyLoggedIn();

        unset($_SESSION['user']);

        header('location: ' . BASE_URL . '/login');
        exit;
    }
}