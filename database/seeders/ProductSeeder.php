<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        foreach (range(1, 10) as $index) {
            DB::table('products')->insert([
                'name' => $faker->words(1, true),
                'price' => $faker->numberBetween(10000, 1000000),
                'image' => 'product2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
