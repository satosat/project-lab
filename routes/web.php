<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/profile', function () {
    return view('user.profile');
});

// Register
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('new user');

// Login
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');

// Movies
Route::redirect('/', '/movies');
Route::get('/movies', [MovieController::class, 'index'])->name('home');
Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::post('/movies', [MovieController::class, 'store'])->name("movies.store");
Route::get('/movies/{id}/edit', [MovieController::class, 'edit'])->name('movies.edit');
ROute::put('/movies/{id}', [MovieController::class, 'update'])->name('movies.update');
Route::post('/movies', [MovieController::class, 'store'])->name("movies.store");
Route::get('/movies/{id}', [MovieController::class, 'show'])->name("movies.show");
Route::get('/movies/search', [MovieController::class, 'indexSearch'])->name("search");
Route::delete('/movies/{id}', [MovieController::class, 'destroy'])->name('movies.destroy');

// Actors
Route::get('/actors', [ActorController::class, 'index'])->name('actors');
Route::get('/actors/create', [ActorController::class, 'create'])->name('actors.create');
Route::post('/actors', [ActorController::class, 'store'])->name('actors.store');
Route::get('/actors/{id}', [ActorController::class, 'show'])->name('actors.show');
