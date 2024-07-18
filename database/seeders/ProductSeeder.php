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
        $fake = Factory::create();
        for ($i = 0; $i < 50; $i++) {
            DB::table('products')->insert([
                'title' => fake()->text(25),
                'thumbnail' => 'https://binhminhdigital.com/storedata/images/product/may-anh-canon-eos-m200-kit-ef-m-15-45mm-is-stm-trang.jpg',
                'machineline' => $fake->name,
                'price' => $fake->randomFloat(2, 1, 200),
                'quantity' => $fake->numberBetween(1, 100),
                'category_id' => rand(1, 5),
            ]);
        }
    }
}
