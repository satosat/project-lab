<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\GenreType;
use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = GenreType::all();

        foreach (Movie::all() as $movie) {
            $range = fake()->numberBetween(0, count($genres) - 1);

            for ($i = 0; $i < $range; $i++) {
                Genre::create([
                    'movie_id' => $movie->id,
                    'genre_id' => $genres[fake()->numberBetween(0, count($genres) - 1)]->id,
                ]);
            }
        }
    }
}
