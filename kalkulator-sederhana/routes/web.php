<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConvertionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/', [HomeController::class, 'index']);
route::get('/calculator', [CalculatorController::class, 'index']);
route::post('/calculate', [CalculatorController::class, 'calculate']);
route::get('/convertion', [ConvertionController::class, 'index']);
route::post('/convert', [ConvertionController::class, 'convert']);