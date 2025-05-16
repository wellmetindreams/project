<?php

use App\Http\Controllers\HomeController;
use \App\Http\Controllers\KnifeController;
use \App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/user/profile/{username}', function (string $username) {
    return "Hello, $username!";
});

Route::get('/current/user', function () {
    return redirect()->route('profile');
});    

Route::get('{lang}/product/{id}', function (string $lang, int $id) {
    //...
})->where('lang', '[a-z]{2}')->where('id', '[0-9]{4,}');

Route::get('/search/{search}', function (string $search) {
    return $search;
});

Route::controller(KnifeController::class)->group(function () {
    Route::get('/knives', 'index')->name('knives.index');
});

Route::resource('/products', ProductController::class);
