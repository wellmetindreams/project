<?php

namespace App\Http\Controllers;
use App\Models\Knife;
use App\Models\KnifeImage;
use App\Models\Maker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController
{
    public function index()
    {   
        $knifes = Knife::where('created_at', '<',now())
        ->with(['primaryImage', 'maker', 'country', 'material', 'knifeType', 'collection'])
        ->orderBy("created_at","desc")
        ->limit(2)
        ->get();

        return view('home.index', ['knifes'=> $knifes]);
    }
}