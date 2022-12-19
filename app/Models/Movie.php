<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'release_date',
        'thumbnail_source',
        'background_source',
        'director',
    ];

    /**
     * Get characters
     */
    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
