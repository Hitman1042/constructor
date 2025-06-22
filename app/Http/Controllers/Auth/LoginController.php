<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
	public function store(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate(); // !Важно!
        return redirect('/dashboard');
    }

    return back()
        ->withErrors(['email' => 'Неверный email или пароль'])
        ->withInput();
}
}