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
Auth::routes();
*/

route::get('/', [AuthController::class, 'loginForm'])->name('loginForm');
route::get('/register', [AuthController::class, 'registerForm'])->name('registerForm');
route::post('/login', [AuthController::class, 'login'])->name('login');
route::post('/register', [AuthController::class, 'register'])->name('register');
route::post('/logout', function () {
    auth()->logout();
    return redirect()->route('loginForm');
})->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/books', [App\Http\Controllers\BooksController::class, 'index'])->name('books');
Route::get('/books/create', [App\Http\Controllers\BooksController::class, 'create'])->name('books.create');
Route::post('/books', [App\Http\Controllers\BooksController::class, 'store'])->name('books.store');
Route::get('/books/{book}', [App\Http\Controllers\BooksController::class, 'show'])->name('books.show');
Route::get('/books/{book}/edit', [App\Http\Controllers\BooksController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [App\Http\Controllers\BooksController::class, 'update'])->name('books.update');
Route::delete('/books/{book}', [App\Http\Controllers\BooksController::class, 'destroy'])->name('books.destroy');
