<?php

class Flasher {
    public function setFlash($msg)
    {
        $_SESSION['flash'] = [
            'msg' => $msg,
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash']))
        {

        }
    }
}