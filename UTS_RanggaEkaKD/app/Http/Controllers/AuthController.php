<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function registerForm(){
        return view('auth.register');
    }

    public function loginForm(){
        return view('auth.login');
    }

    public function login(){
        if(!auth()->attempt(request(['email', 'password']))){
            return back()->withErrors([
                'message' => 'Wrong email or password. Please try again'
            ]);
        }
        return redirect()->route('home');
    }

    public function register(){
        $attributes = request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        User::create($attributes);

        return redirect()->route('loginForm');
    }
}
