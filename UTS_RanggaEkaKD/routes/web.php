<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('mainpage', [
        "title" => "Home"
    ]);
});
Route::get('/movies', function () {
    return view('productPage', [
        "title" => "Product"
    ]);
});
route::get('/about', function () {
    return view('aboutPage', [
        "title" => "About"
    ]);
});


route::get('/register', [AuthController::class ,'registerForm'])->name('register');
route::get('/login', [AuthController::class ,'loginForm'])->name('login');
