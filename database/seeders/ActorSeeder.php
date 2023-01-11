<?php

namespace Database\Seeders;

use App\Models\Actor;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actors')->insert(
            [
                [
                    "name" => "Robin Williams",
                    "biography" => "Robin McLaurin Williams was an American actor and comedian. Known for his improvisational skills and the wide variety of characters he created on the spur of the moment and portrayed on film, in dramas and comedies alike, he is regarded as one of the greatest comedians of all time.",
                    "popularity" => fake()->randomFloat(1, 0, 10),
                    "gender" => "male",
                    "dob" => "1951-07-21",
                    "birthplace" => "Chicago",
                    "image_source" => "robin-williams.webp",
                ],
                [
                    "name" => "Tom Holland",
                    "biography" => "Thomas Stanley Holland is an English actor. His accolades include a British Academy Film Award, three Saturn Awards, a Guinness World Record and an appearance on the Forbes 30 Under 30 Europe list. Some publications have called him one of the most popular actors of his generation.",
                    "popularity" => fake()->randomFloat(1, 0, 10),
                    "gender" => "male",
                    "dob" => "1996-06-01",
                    "birthplace" => "Kingston",
                    "image_source" => "tom-holland.jpeg",
                ],
                [
                    "name" => "Zendaya",
                    "biography" => "Zendaya Maree Stoermer Coleman, professionally known by the mononym Zendaya, is an American actress and singer. She has received various accolades, including two Primetime Emmy Awards. Time magazine named her one of the 100 most influential people in the world on its annual list in 2022. ",
                    "popularity" => fake()->randomFloat(1, 0, 10),
                    "gender" => "female",
                    "dob" => "1996-09-01",
                    "birthplace" => "Oakland",
                    "image_source" => "zendaya.jpeg",
                ],
                [
                    "name" => "Matt Damon",
                    "biography" => "Matthew Paige Damon is an American actor, film producer, and screenwriter. Ranked among Forbes' most bankable stars, the films in which he has appeared have collectively earned over $3.88 billion at the North American box office, making him one of the highest-grossing actors of all time.",
                    "popularity" => fake()->randomFloat(1, 0, 10),
                    "gender" => "male",
                    "dob" => "1970-10-08",
                    "birthplace" => "Cambridge",
                    "image_source" => "matt-damon.jpeg",
                ],
                [
                    "name" => "Ben Affleck",
                    "biography" => "Benjamin Géza Affleck is an American actor and filmmaker. His accolades include two Academy Awards and three Golden Globe Awards. Affleck began his career as a child when he starred in the PBS educational series The Voyage of the Mimi.",
                    "popularity" => fake()->randomFloat(1, 0, 10),
                    "gender" => "male",
                    "dob" => "1972-08-15",
                    "birthplace" => "Berkeley",
                    "image_source" => "ben-affleck.jpg",
                ],
                [
                    "name" => "Ana de Armas",
                    "biography" => "Ana Celia de Armas Caso is a Cuban and Spanish actress. She began her career in Cuba and had a leading role in the romantic drama Una rosa de Francia. At age 18, she moved to Madrid, Spain, and starred in the popular drama El internado for six seasons from 2007 to 2010.",
                    "popularity" => fake()->randomFloat(1, 0, 10),
                    "gender" => "female",
                    "dob" => "1988-04-30",
                    "birthplace" => "Havana",
                    "image_source" => "ana-de-armas.webp",
                ],
            ]
        );
    }
}
