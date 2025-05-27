<?php

namespace App\Http\Controllers;

use App\Models\Knife;
use Illuminate\Http\Request;
use App\Models\User;
class KnifeController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $knifes = Knife::with([
            'primaryImage',
            'maker',
            'collection',
            'material',
            'knifeType',
            'country'
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
        return view('knife.show', ['knife' => $knife]);
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
        $query = Knife::where('created_at', '<', now())
        ->with(['primaryImage', 'maker', 'country', 'material', 'knifeType', 'collection'])
        ->orderBy('created_at','desc');

       $knifes = $query->paginate(9);

        return view('knife.search', ['knifes' => $knifes]);
    }

    public function watchlist()
    {
        $knifes = User::find(1)
        ->favouriteKnifes()
        ->with(['primaryImage', 'maker', 'country', 'material', 'knifeType', 'collection'])
        ->paginate(6);
        
        return view('knife.watchlist', ['knifes' => $knifes]);
    }
}