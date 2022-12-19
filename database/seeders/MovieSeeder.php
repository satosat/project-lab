<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'title' => "The Greatest Showmen",
            'Description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'release_date' => "2021-04-12",
            'thumbnail_source' => "thumbnail_greatest.jpeg",
            'background_source' => "background_greatest.jpeg",
            'director' => 'lorem',
        ]);

        DB::table('movies')->insert([
            'title' => "Minion",
            'Description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'release_date' => "2021-04-12",
            'thumbnail_source' => "thumbnail_minion.jpeg",
            'background_source' => "background_minion.jpeg",
            'director' => 'lorem',
        ]);

        DB::table('movies')->insert([
            'title' => "Spiderman",
            'Description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'release_date' => "2021-04-12",
            'thumbnail_source' => "thumbnail_spiderman.jpg",
            'background_source' => "background_spiderman.webp",
            'director' => "lorem",
        ]);

        DB::table('movies')->insert([
            'title' => "Encanto",
            'Description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'release_date' => "2021-04-12",
            'thumbnail_source' => "thumbnail_encanto.jpeg",
            'background_source' => "background_encanto.jpeg",
            'director' => 'lorem',
        ]);

        DB::table('movies')->insert([
            'title' => "Blackpanther",
            'Description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'release_date' => "2021-04-12",
            'thumbnail_source' => "thumbnail_blackpanther.jpeg",
            'background_source' => "background_blackpanther.jpeg",
            'director' => 'lorem',
        ]);

        DB::table('movies')->insert([
            'title' => "Matrix",
            'Description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'release_date' => "2021-04-12",
            'thumbnail_source' => "thumbnail_matrix.jpg",
            'background_source' => "background_matrix.jpeg",
            'director' => 'lorem',
        ]);
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Movie::create([
                'title' => $faker->words(3, true),
                'description' => $faker->text(50),
                'release_date' => $faker->date('Y/m/d'),
                'thumbnail_source' => 'null',
                'background_source' => 'null',
                'director' => $faker->name(),
            ]);
        }
    }
}
