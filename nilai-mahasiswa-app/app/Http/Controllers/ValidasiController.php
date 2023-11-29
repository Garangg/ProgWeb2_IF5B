<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidasiController extends Controller
{
    //
    public function input(){
        return view('inputvalidasi');
    }

    public function proses(Request $request){
        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'pekerjaan' => 'required|min:5|max:20',
            'usia' => 'required|numeric'
        ]);

        return view('proses',['data' => $request]);
    }

    public function login(){
        return view('login');
    }

    public function prosesLogin(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        return view('prosesLogin',['data' => $request]);
    }
}
