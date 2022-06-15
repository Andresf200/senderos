<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request): string
    {
        $request->validate([
            'email' => ['email','required','string'],
            'password' => ['required','string'],
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->filled('rememberMe');
        if (Auth:: attempt($credentials,$remember)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with(['status','Login Successful']);
        }
            return redirect()->route('login')->with(['status','Login Error']);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->regenerateToken();
        return redirect()->route('home')->with(['status','you are logged out']);
    }
}
