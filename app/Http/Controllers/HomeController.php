<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController
{
    public function index()
    {
        return view('home.index');
    }
}