<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreType extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'genres', 'genre_id', 'movie_id');
    }
}
