<?php

namespace Database\Seeders;

use App\Models\GenreType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
            "Action",
            "Comedy",
            "Drama",
            "Family",
            "Horror",
            "Thriller",
        ];


        foreach ($genres as $genre) {
            GenreType::create([
                "genre" => $genre,
            ]);
        }
    }
}
