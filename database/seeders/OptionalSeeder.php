<?php

namespace Database\Seeders;

use App\Models\Optional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class OptionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $optionals = [
            'aria condizionata',
            'sedili riscoldati',
            'sensore piogga',
            'sensore parcheggi',
            'cruise controll'
        ];
        foreach ($optionals as $optional_name) {
            $new_optional = new Optional();
            $new_optional->name = $optional_name;
            $new_optional->description = $faker->paragraph();
            $new_optional->slug = Str::slug($new_optional->name, '-');
            $new_optional->price = $faker->randomNumber(3, true).'€';
            $new_optional->save();
        }
    }
}
