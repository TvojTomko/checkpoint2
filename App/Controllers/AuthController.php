<?php

namespace App\Controllers;

use App\Auth;
use App\Core\Responses\JsonResponse;
use App\Core\Responses\Response;

class AuthController extends AControllerRedirect
{

    /**
     * @inheritDoc
     */
    public function index()
    {
        // TODO: Implement index() method.
    }

    public function loginpage()
    {
        return $this->html(
            [
                //'error' => $this->request()->getValue('error')
            ]
        );
    }

    public function login()
    {
        $login = $this->request()->getValue('login');
        $password = $this->request()->getValue('password');

        $logged = Auth::login($login, $password);

        if ($logged) {
            $this->redirect('home');
        } else {
            $this->redirect('auth', 'login.view', ['error'=> 'Wrong login name or password']);
        }
    }
}