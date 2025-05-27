<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KnifeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Ножи
Route::get('/knife', [KnifeController::class, 'index'])->name('knife.index');
Route::get('/knife/search', [KnifeController::class, 'search'])->name('knife.search');
Route::get('/knife/{knife}', [KnifeController::class, 'show'])->name('knife.show');

Route::middleware(['auth'])->group(function () {
    Route::get('/knife/create', [KnifeController::class, 'create'])->name('knife.create');
    Route::post('/knife', [KnifeController::class, 'store'])->name('knife.store');
    Route::get('/knife/watchlist', [KnifeController::class, 'watchlist'])->name('knife.watchlist');
});

// Регистрация
Route::get('/signup', [SignupController::class, 'create'])->name('signup');
Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');

// Авторизация
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

// Выход
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');