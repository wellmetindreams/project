<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController
{
    public function create()
    {
        return view('auth.login');
    }
}
