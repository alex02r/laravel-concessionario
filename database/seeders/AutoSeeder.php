<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Auto;

class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Auto::create([

                'model' => $faker->word,
                'year' => $faker->year,
                'type' => $faker->randomElement(['SUV', 'Sedan', 'Hatchback', 'Coupé', 'Convertible']),
                'fuel_type' => $faker->randomElement(['Petrol', 'Diesel', 'Electric', 'Hybrid']),
                'displacement' => $faker->numberBetween(1000, 4000),
                'horsepower' => $faker->numberBetween(50, 400),
                'description' => $faker->paragraph,
                'img' => $faker->imageUrl(640, 480, 'cars', true),
                'price' => $faker->randomNumber(5) . ' €',
            ]);
        }
    }
}
