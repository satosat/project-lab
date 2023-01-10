<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

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
            [
                'title' => "The Greatest Showmen",
                'Description' => "P T Barnum becomes a worldwide sensation in the show business. His imagination and innovative ideas take him to the top of his game.",
                'release_date' => "2017-12-29",
                'thumbnail_source' => "greatest.jpeg",
                'background_source' => "greatest.jpeg",
                'director' => 'Michael Gracey',
            ],
            [
                'title' => "Minions",
                'Description' => "Minions Kevin, Stuart and Bob decide to find a new master. They embark on a global trip and meet Scarlett Overkill, a female super-villain who recruits them and hatches a plan to take over the world.",
                'release_date' => "2015-07-17",
                'thumbnail_source' => "minion.jpeg",
                'background_source' => "minion.jpeg",
                'director' => 'Pierre Coffin',
            ],
            [
                'title' => "Spiderman: No Way Home",
                'Description' => "Spider-Man seeks the help of Doctor Strange to forget his exposed secret identity as Peter Parker. However, Strange's spell goes horribly wrong, leading to unwanted guests entering their universe.",
                'release_date' => "2021-12-15",
                'thumbnail_source' => "spiderman.jpg",
                'background_source' => "spiderman.webp",
                'director' => "Jon Watts",
            ],
            [
                'title' => "Encanto",
                'Description' => "The Madrigals are an extraordinary family who live hidden in the mountains of Colombia in a charmed place called the Encanto. The magic of the Encanto has blessed every child in the family with a unique gift -- every child except Mirabel. However, she soon may be the Madrigals last hope when she discovers that the magic surrounding the Encanto is now in danger.",
                'release_date' => "2021-11-24",
                'thumbnail_source' => "encanto.jpeg",
                'background_source' => "encanto.jpeg",
                'director' => 'Byron Howard',
            ],
            [
                'title' => "Blackpanther",
                'Description' => "After his father's death, T'Challa returns home to Wakanda to inherit his throne. However, a powerful enemy related to his family threatens to attack his nation.",
                'release_date' => "2018-02-14",
                'thumbnail_source' => "blackpanther.jpeg",
                'background_source' => "blackpanther.jpeg",
                'director' => 'Ryan Coogler',
            ],
            [
                'title' => "The Matrix",
                'Description' => "Thomas Anderson, a computer programmer, is led to fight an underground war against powerful computers who have constructed his entire reality with a system called the Matrix.",
                'release_date' => "1999-07-03",
                'thumbnail_source' => "matrix.jpeg",
                'background_source' => "matrix.jpeg",
                'director' => 'Lana Wachowski',
            ],
            [
                'title' => "Good Will Hunting",
                'Description' => "Will Hunting, a genius in mathematics, solves all the difficult mathematical problems. When he faces an emotional crisis, he takes help from psychiatrist Dr Sean Maguireto, who helps him recover.",
                'release_date' => "1999-12-05",
                'thumbnail_source' => "good-will-hunting.jpeg",
                'background_source' => "good-will-hunting.jpeg",
                'director' => 'Gus Van Sant',
            ],
        ]);
    }
}
