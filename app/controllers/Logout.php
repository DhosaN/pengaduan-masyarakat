<?php

class Logout extends Controller {
    public function index()
    {
        Middleware::onlyLoggedIn();

        $this->directTo();
    }
}