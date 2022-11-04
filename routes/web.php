<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies/create', [MovieController::class, 'create']);
Route::post('/movies', [MovieController::class, 'store'])->name("add book");
Route::get('/movies/{id}', [MovieController::class, 'show'])->name("show book");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
