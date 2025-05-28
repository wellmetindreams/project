<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KnifeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;

/* Web Routes */

Route::get('/', [HomeController::class, 'index'])->name('home');

/* НОЖИ */
Route::get('/knife',          [KnifeController::class, 'index' ])->name('knife.index');
Route::get('/knife/search',   [KnifeController::class, 'search'])->name('knife.search');

/*  маршруты, доступные только авторизованным пользователям */
Route::middleware('auth')->group(function () {
    Route::get('/knife/watchlist', [KnifeController::class, 'watchlist'])->name('knife.watchlist');
    Route::get('/knife/create',    [KnifeController::class, 'create'   ])->name('knife.create');
    Route::post('/knife',          [KnifeController::class, 'store'    ])->name('knife.store');
});

/*  динамический маршрут: ДОЛЖЕН идти после статических */
Route::get('/knife/{knife}', [KnifeController::class, 'show'])
     ->whereNumber('knife')
     ->name('knife.show');

/** АВТОРИЗАЦИЯ / РЕГИСТРАЦИЯ */
Route::get ('/signup', [SignupController::class, 'create'])->name('signup');
Route::post('/signup', [SignupController::class, 'store' ])->name('signup.store');

Route::get ('/login',  [LoginController::class, 'create'])->name('login');
Route::post('/login',  [LoginController::class, 'store' ])->name('login.store');

/* восстановление пароля  */
Route::middleware('guest')->group(function () {
    Route::get ('/forgot-password', function () {
        return view('auth.forgot-password');
    })->name('password.request');

    Route::post('/forgot-password', function (\Illuminate\Http\Request $request) {
        $request->validate(['email' => 'required|email']);
        $status = Password::sendResetLink($request->only('email'));
        return back()->with('status', __($status));
    })->name('password.email');
});

/*  выход */
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
