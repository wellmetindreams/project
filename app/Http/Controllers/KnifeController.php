<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KnifeController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('knife.index');
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
    public function show(string $id)
    {
        return view('knife.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('knife.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search()
    {
        return view('knife.search');
    }
}