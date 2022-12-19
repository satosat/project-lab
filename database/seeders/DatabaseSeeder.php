<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Actor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            MovieSeeder::class,
            ActorSeeder::class,
            CharacterSeeder::class,
            GenreTypeSeeder::class,
            GenreSeeder::class,
        ]);
    }
}
