<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $operator = $request->operator;
        $result = null;

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if($num2 != 0) {
                    $result = $num1 / $num2;
                }else {
                    return redirect('/calculator')->with('error', 'Angka kedua tidak boleh 0');
                }
            break;
        }

        return view('calculator', [
            'num1' => $num1,
            'num2' => $num2,
            'operator' => $operator,
            'result' => $result,
        ]);
    }
}
