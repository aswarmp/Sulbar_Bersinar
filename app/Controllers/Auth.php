<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function Login()
    {
        echo view('auth/V_Login');
    }
}
