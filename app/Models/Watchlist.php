<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'movie_id',
        'status',
    ];

    public $timestamps = false;

    /**
     * Get movie
     */
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    /**
     * Get user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
