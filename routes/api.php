<?php

use App\Models\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/actors/all', function () {
    return ['actors' => Actor::all()->sortBy('name')];
});
