<?php

class Logout extends Controller {
    public function index()
    {
        Middleware::onlyLoggedIn();

        unset($_SESSION['user']);

        $this->directTo();
    }
}