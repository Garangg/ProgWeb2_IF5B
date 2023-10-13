<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertionController extends Controller
{
    public function index(){
        return view('convertion');
    }

    public function convert(Request $request){
        $celcius = $request->celcius;
        $operator = $request->operator;
        $hasil = null;

        switch ($operator) {
            case 'reamur':
                $hasil = $celcius * 4/5;
                break;
            case 'fahrenheit':
                $hasil = $celcius * 9/5 + 32;
                break;
            case 'kelvin':
                $hasil = $celcius + 273.15;
                break;
        }

        return view('convertion', [
            'celcius' => $celcius,
            'operator' => $operator,
            'hasil' => $hasil,
        ]);
    }
}
