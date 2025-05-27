<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class LoginController extends Controller
{
    /**
     * Показывает форму входа
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Обрабатывает отправку формы входа
     */
    public function store(Request $request)
    {
        // Валидация входных данных
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        // Попытка авторизации
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended(route('home')); // Убедись, что маршрут "home" существует
        }

        // Возврат с ошибкой при неудачной попытке
        return back()->withErrors([
            'email' => 'Неверный email или пароль.',
        ])->onlyInput('email');
    }

    /**
     * Выход пользователя
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
