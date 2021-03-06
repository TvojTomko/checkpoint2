<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Models\Post;

/**
 * Class HomeController
 * Example of simple controller
 * @package App\Controllers
 */
class HomeController extends AControllerBase
{

    public function index()
    {
        return $this->html(
            [
                'success' => $this->request()->getValue('success')
            ]);
    }

    public function contact()
    {
        return $this->html(
            []
        );
    }

    public function team()
    {
        return $this->html(
            []
        );
    }

    public function pricing()
    {
        return $this->html(
            []
        );
    }


    public function register()
    {
        return $this->html(
            []
        );
    }
}