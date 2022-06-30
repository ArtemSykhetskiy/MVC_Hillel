<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class AuthController extends Controller
{
    public function login()
    {
        View::render('auth/login');
    }

    public function registration()
    {

    }

    public function verify()
    {
        dd($_REQUEST);
    }
}
