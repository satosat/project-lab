<?php

namespace Database\Seeders;

use App\Models\Actor;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $gender = ['male', 'female'];

        for ($i = 0; $i < 10; $i++) {
            Actor::create([
                "name" => $faker->name(),
                "biography" => $faker->text(510),
                "popularity" => $faker->randomFloat(1, 0, 10),
                "gender" => $gender[$faker->numberBetween(0, 1)],
                "dob" => $faker->date(),
                "birthplace" => $faker->city(),
                "image_source" => "N/A",
            ]);
        }
    }
}
