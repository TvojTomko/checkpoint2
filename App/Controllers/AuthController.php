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

    public function login()
    {
        $login = $this->request()->getValue('login');
        $password = $this->request()->getValue('password');

        $logged = Auth::login($login, $password);

        if ($logged) {
            $this->redirect('home', 'index', ['success' => 'Logged in successful']);
        } else {
            $this->redirect('auth', 'loginpage', ['error'=> 'Wrong login name or password']);
        }
    }

    public function registerpage()
    {
        return $this->html(
            [
                'error' => $this->request()->getValue('error')
            ]
        );
    }

    public function register()
    {
        $newUser = new User();

        $email=$this->request()->getValue('email');
        $username= $this->request()->getValue('username');

        if (!User::getAll('email = ?', [$email])) {
            if (!User::getAll('username = ?', [$username])) {

                $newUser->setEmail($this->request()->getValue('email'));
                $newUser->setUsername($this->request()->getValue('username'));
                $newUser->setPassword($this->request()->getValue('password'));

                $newUser->save();
                $this->redirect('home', 'index', ['success' => 'User was created']);

            } else {
                $this->redirect('auth', 'registerpage', ['error'=> 'Username is used by another member']);
            }
        } else {
            $this->redirect('auth', 'registerpage', ['error'=> 'Email is used by another member']);
        }
    }

    public function changepasswordpage()
    {
        return $this->html(
            [
                'error' => $this->request()->getValue('error')
            ]
        );
    }

    public function changepassword() {

        $name = $_SESSION["name"];

        $user = User::getAll('username = ?', [$name]);
        //$oldpassword = User::getAll('password = ?', 'user = $name');
        $usernew = $user[0];
        $newpassword = $this->request()->getValue('newpassword');
        $repeatpassword = $this->request()->getValue('repeatpassword');
        //if ($newpassword != $oldpassword )
        if ($newpassword == $repeatpassword)
        {
            $usernew->setPassword($newpassword);
            $usernew->save();

            $this->redirect('home', 'index', ['success' => 'Your password was changed']);
        } else {
            $this->redirect('auth', 'changepasswordpage', ['error' => 'Your new passwords doesnt match']);
        }

    }

    public function deleteuserpage()
    {
        return $this->html(
            []
        );
    }

    public function deleteuser()
    {
        $name = $_SESSION["name"];

        $user = User::getAll('username = ?', [$name]);
        $usernew = $user[0];
        $usernew->delete();

        unset($_SESSION['name']);
        session_destroy();

        $this->redirect('home', 'index', ['success' => 'User was deleted']);
    }

    public function logout()
    {
        Auth::logout();
        $this->redirect('home', 'index', ['success' => 'Successful logout']);
    }
}