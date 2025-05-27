<?php

use App\Http\Controllers\HomeController;
use \App\Http\Controllers\KnifeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/signup', [SignupController::class,'create'])->name('signup');
Route::get('/login', [LoginController::class,'create'])->name('login');

Route::resource('knife', KnifeController::class);

Route::get('/knife/search', [KnifeController::class,'search'])->name('knife.search');

Route::get('/knife/watchlist', [KnifeController::class,'watchlist'])->name('knife.watchlist');

Route::get('/user/profile/{username}', function (string $username) {
    return "Hello, $username!";
});

Route::get('/current/user', function () {
    return redirect()->route('profile');
});    

Route::get('{lang}/product/{id}', function (string $lang, int $id) {
    //...
})->where('lang', '[a-z]{2}')->where('id', '[0-9]{4,}');