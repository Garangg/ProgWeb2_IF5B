<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if ($request->username == "admin" && $request->password == "admin") {
            // Login berhasil
            auth()->loginUsingId(1); // Login sebagai admin
            return redirect('/dashboard');
        } else {
            // Login gagal
            return back()->withError('Login gagal, silahkan coba lagi!');
        }
    }

}
