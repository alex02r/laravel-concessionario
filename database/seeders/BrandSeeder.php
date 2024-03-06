<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Brand;

use Faker\Generator as Faker;
use Faker\Provider\en_US\PhoneNumber;
use Faker\Provider\en_US\Company;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $brand = new Brand();
            $brand->name = $faker->company();
            $brand->logo = $faker->imageUrl(360, 360, 'cars', true);
            $brand->phone = $faker->phoneNumber();
            $brand->type_car = $faker->words(3, true);
            $brand->slug = Str::slug($brand->name, '-');

            $brand->save();
        }
    }
}
