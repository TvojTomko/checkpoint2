<?php

namespace App;

use App\Models\User;

class Auth
{

    public static function login($login, $password)
    {
        $user = User::getAll('username = ? and password = ?', [$login, $password]);
        if ($user) {
            $_SESSION["name"] = $login;
            return true;
        } else {
            return false;
        }
    }

    public static function logout()
    {
        unset($_SESSION['name']);
        session_destroy();
    }

    public static function isLogged()
    {
        return isset($_SESSION['name']);
    }

    public static function getName()
    {
        return (Auth::isLogged() ? $_SESSION['name'] : "");
    }
}