<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WatchlistController;
use Illuminate\Support\Facades\Route;

// Register
Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Login
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Movies
Route::redirect('/', '/movies');
Route::get('/movies', [MovieController::class, 'index'])->name('home');
Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::post('/movies', [MovieController::class, 'store'])->name("movies.store");
Route::get('/movies/sort',[MovieController::class, 'sortBy'])->name('sort');
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

// User
Route::get('/profile', [UserController::class, 'index'])->name('user');
Route::post('/profile/update/{id}', [UserController::class, 'updateProfile'])->name('user.updateProfile');
Route::post('/profile/image/update/{id}', [UserController::class, 'updateImage'])->name('user.updateImage');

// Watchlist
Route::get('/watchlist', [WatchlistController::class, 'index'])->name('search watch');

Route::get('/actors/{id}/edit', [ActorController::class, 'edit'])->name("actors.edit");
Route::put('/actors/{id}', [ActorController::class, 'update'])->name('actors.update');
Route::delete('/actors/{id}', [ActorController::class, 'destroy'])->name('actors.destroy');

