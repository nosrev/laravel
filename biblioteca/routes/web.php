<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\LoansController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::post('/users', [UsersController::class, 'store'])->name('users.store');
Route::get('/users/create', function () {
    return view('user.add');
})->name('users.create');
Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
Route::post('/users/{id}', [UsersController::class, 'update'])->name('users.update');
Route::get('/users/{id}/delete', [UsersController::class, 'destroy'])->name('users.destroy');

Route::get('/genres', [GenresController::class, 'index'])->name('genres.index');
Route::post('/genres', [GenresController::class, 'store'])->name('genres.store');
Route::get('/genres/create', function () {
    return view('genre.add');
})->name('genres.create');
Route::get('/genres/{id}/edit', [GenresController::class, 'edit'])->name('genres.edit');
Route::post('/genres/{id}', [GenresController::class, 'update'])->name('genres.update');
Route::get('/genres/{id}/delete', [GenresController::class, 'destroy'])->name('genres.destroy');

Route::get('/books', [BooksController::class, 'index'])->name('books.index');
Route::post('/books', [BooksController::class, 'store'])->name('books.store');
Route::get('/books/create', [BooksController::class, 'add'])->name('books.create');
Route::get('/books/{id}/edit', [BooksController::class, 'edit'])->name('books.edit');
Route::post('/books/{id}', [BooksController::class, 'update'])->name('books.update');
Route::get('/books/{id}/delete', [BooksController::class, 'destroy'])->name('books.destroy');

Route::get('/loans', [LoansController::class, 'index'])->name('loans.index');
Route::post('/loans', [LoansController::class, 'store'])->name('loans.store');
Route::get('/loans/create', [LoansController::class, 'add'])->name('loans.create');
Route::get('/loans/{id}/edit', [LoansController::class, 'edit'])->name('loans.edit');
Route::post('/loans/{id}', [LoansController::class, 'update'])->name('loans.update');
Route::get('/loans/{id}/delete', [LoansController::class, 'destroy'])->name('loans.destroy');
