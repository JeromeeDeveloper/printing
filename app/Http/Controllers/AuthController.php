<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function owner_register()
    {
        return view('auth.owner_register');
    }

    public function login()
    {
        return view('auth.login');
    }
}
