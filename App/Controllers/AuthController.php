<?php

namespace App\Controllers;

use App\Auth;
use App\Core\Responses\JsonResponse;
use App\Core\Responses\Response;
use App\Models\User;

class AuthController extends AControllerRedirect
{

    /**
     * @inheritDoc
     */
    public function index()
    {
    }

    public function loginpage()
    {
        return $this->html(
            [
                'error' => $this->request()->getValue('error')
            ]
        );
    }

    public function registerpage()
    {
        return $this->html(
            []
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
            $this->redirect('auth', 'loginpage', ['error'=> 'Wrong login name or password']);
        }
    }

    public function register()
    {
        $postId = $this->request()->getValue('postid');

        if ($postId) {
            $newUser = new User();
            $newUser->setEmail($this->request()->getValue('email'));
            $newUser->setUsername($this->request()->getValue('username'));
            $newUser->setPassword($this->request()->getValue('password'));
            $newUser->save();
        }

        $this->redirect('home');
    }

    public function logout()
    {
        Auth::logout();
        $this->redirect('home');
    }
}