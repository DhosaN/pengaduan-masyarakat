<?php

class Middleware {
    public static function onlyAdmin()
    {
        if (empty($_SESSION['user']))
        {
            header('location: ' . BASE_URL . '/login');
            exit;
        }
        if ($_SESSION['user']['id_level'] == 1)
        {
            header('location: ' . BASE_URL . '/petugas');
            exit;
        }
    }

    public static function onlyPetugas()
    {
        if (empty($_SESSION['user']))
        {
            header('location: ' . BASE_URL . '/login');
            exit;
        }
        if ($_SESSION['user']['id_level'] == 2)
        {
            header('location: ' . BASE_URL . '/admin');
            exit;
        }
    }

    public static function onlyNotLoggedIn()
    {
        if (isset($_SESSION['user']))
        {
            if ($_SESSION['user']['id_level'] == 1)
            {
                header('location: ' . BASE_URL . '/petugas');
                exit;
            }
            if ($_SESSION['user']['id_level'] == 2)
            {
                header('location: ' . BASE_URL . '/admin');
                exit;
            }
        }
    }

    public static function onlyLoggedIn()
    {
        if (!isset($_SESSION['user']))
        {
            header('location: ' . BASE_URL . '/login');
            exit;
        }
    }
}