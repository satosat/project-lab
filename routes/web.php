<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Route::get('/movies/{id}', function ($id) {
//     return view('movieDetail');
// });

// Register
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('new user');

// Login
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');

// Movies
Route::redirect('/', '/movies');
Route::get('/movies', [MovieController::class, 'index'])->name('home');
Route::get('/movies/create', [MovieController::class, 'create'])->name('create new movie');
Route::post('/movies', [MovieController::class, 'store'])->name("movies.store");
Route::get('/movies/{id}/edit', [MovieController::class, 'edit'])->name('edit movie');
Route::post('/movies', [MovieController::class, 'store'])->name("add movie");
Route::get('/movies/{id}', [MovieController::class, 'show'])->name("show movie");

// Actors
Route::get('/actors', [ActorController::class, 'index'])->name('actors');
Route::get('/actors/create', [ActorController::class, 'create'])->name('actors.create');
Route::post('/actors', [ActorController::class, 'store'])->name('actors.store');
Route::get('/actors/{id}', [ActorController::class, 'show'])->name('actors.show');
