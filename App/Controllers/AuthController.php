<?php

namespace App\Controllers;

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

    public function loginform()
    {
        return $this->html();
    }

    public function login()
    {

    }
}