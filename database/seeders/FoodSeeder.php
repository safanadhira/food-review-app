<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Food;
use App\Models\Restaurant;

class FoodSeeder extends Seeder
{
    public function run(): void
    {
        $pakBudi = Restaurant::where('name', 'Nasi Goreng Pak Budi')->first();
        $sushiZen = Restaurant::where('name', 'Sushi Zen')->first();

        Food::create([
            'name' => 'Nasi Goreng Spesial',
            'price' => 25000,
            'description' => 'Nasi goreng dengan ayam, udang, dan telur mata sapi.',
            'restaurant_id' => 1,
        ]);

        Food::create([
            'name' => 'Nasi Goreng',
        ]);
    }
}
