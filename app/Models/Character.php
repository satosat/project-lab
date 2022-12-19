<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'actor_id',
        'movie_id',
        'name',
    ];

    /**
     * Get character's movie
     */
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    /**
     * Get character's actor
     */
    public function actor()
    {
        return $this->belongsTo(Actor::class);
    }
}
