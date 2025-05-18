<?php

namespace App\Http\Controllers;
use App\Models\Knives;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController
{
    public function index()
    {
        $knives = Knives::get();

        $KnivesData = [
            'maker_id' => 1,
            'collection_id' => 1,
            'knife_type' => 1,
            'price' => 1,
            'full_length' => 1,
            'blade_length' => 1,
            'blade_width' => 1,
            'butt_thickness' => 1,
            'weight' => 1,
            'material' => 1,
            'country' => 1,
            'description'=> 1
        ];

        $Knives = new Knives ($KnivesData);
        $Knives -> save();
        

        return view('home.index');
    }
}