<?php

namespace Database\Seeders;

use App\Models\Movie;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
