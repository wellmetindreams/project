<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SignupController extends Controller
{
    /**
     * Показывает форму регистрации
     */
    public function create()
    {
        return view('auth.signup');
    }

    /**
     * Обрабатывает форму регистрации
     */
    public function store(Request $request)
    {
        
        // Валидация данных
        $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6|confirmed',
    ]);


        // Создание пользователя
        $user = User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        if (!$user) {
            abort(500, 'Ошибка при создании пользователя');
        }

        // Авторизация пользователя
        Auth::login($user);

        // Редирект после регистрации
        return redirect()->route('home'); // Убедись, что этот маршрут существует
    }
}
