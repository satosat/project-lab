<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'thumbnail_source' => "greatest.png",
            'background_source' => "banner_greatest.jpg",
            'director' => 'lorem',
        ]);

        DB::table('movies')->insert([
            'title' => "Minion",
            'Description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'release_date' => "2021-04-12",
            'thumbnail_source' => "minion.jpeg",
            'background_source' => "banner_greatest.jpg",
            'director' => 'lorem',
        ]);

        DB::table('movies')->insert([
            'title' => "Spiderman",
            'Description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'release_date' => "2021-04-12",
            'thumbnail_source' => "spiderman.jpg",
            'background_source' => "banner_spiderman.webp",
            'director' => "lorem",
        ]);

        DB::table('movies')->insert([
            'title' => "Encanto",
            'Description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'release_date' => "2021-04-12",
            'thumbnail_source' => "encanto.jpeg",
            'background_source' => "banner_greatest.jpg",
            'director' => 'lorem',
        ]);
        
        DB::table('movies')->insert([
            'title' => "Blackpanther",
            'Description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'release_date' => "2021-04-12",
            'thumbnail_source' => "blackpanther.jpeg",
            'background_source' => "banner_greatest.jpg",
            'director' => 'lorem',
        ]);
    }
}
