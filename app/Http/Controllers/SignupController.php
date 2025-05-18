<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController
{
    public function create()
    {
        return view('auth.signup');
    }
}
