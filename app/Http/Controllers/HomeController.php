<?php

namespace App\Http\Controllers;
use App\Models\Knife;
use App\Models\KnifeImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController
{
    public function index()
    {   
        $knife = Knife::find(2);

        $image = new KnifeImage(['image_path'=> 'something','position'=> '2']);

        $knife -> images()->save($image);

        return view('home.index');
    }
}