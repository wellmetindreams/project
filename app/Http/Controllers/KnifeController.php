<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KnifeController
{
    public function index()
    {
        return view('knives.index');
    }
}
