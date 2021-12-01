<?php

namespace App;

class Auth
{
    const LOGIN = "kappa";
    const PASSWORD = "kappa123";

    public static function login($login, $password)
    {
        if ($login == self::LOGIN   && $password == self::PASSWORD ) {
            return true;
        } else
            return false;
    }

    public static function ifLogged()
    {
        return isset($_SESSION['login']);
    }

    public static function getName()
    {
        return (Auth::ifLogged() ? $_SESSION['login'] : "");
    }
}