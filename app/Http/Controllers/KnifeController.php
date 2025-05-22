<?php

namespace App\Http\Controllers;

use App\Models\Knife;
use Illuminate\Http\Request;

class KnifeController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $knifes = Knife::with([
            'maker',
            'collection',
            'material_id',
            'knifeType',
            'country_id',
            'primaryImage'
            ])->get();

        return view('knife.index', compact('knifes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('knife.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Knife $knife)
    {
        return view('knife.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Knife $knife)
    {
        return view('knife.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $knife)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Knife $knife)
    {
        //
    }

    public function search()
    {
        $query = KnifeController::where('created_at', '<', now())
        ->orderBy('created_at','desc');

        $knifeCount = $query->count();

        $knifes = $query->limit(6)->get();

        return view('knife.search', ['knifes' => $knifes, 'knifeCount' => $knifeCount]);
    }
}