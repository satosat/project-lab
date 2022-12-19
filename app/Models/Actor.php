<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'biography',
        'popularity',
        'gender',
        'dob',
        'birthplace',
        'image_source'
    ];

    /**
     * Get associated characters
     */
    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
