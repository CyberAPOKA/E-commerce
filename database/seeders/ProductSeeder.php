<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 30; $i++) {
            DB::table('products')->insert([
                'name' => $faker->word,
                'image' => $faker->imageUrl(640, 480),
                'price' => $faker->randomNumber(2),
                'category' => $faker->word,
                'color' => $faker->hexcolor,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
