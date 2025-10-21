<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    public function run(): void
    {
        Restaurant::create([
            'name' => 'Nasi Goreng Pak Budi',
            'location' => 'Jakarta',
            'rating' => 4.5,
            'image' => 'restaurants/nasigoreng.jpg',
            'description' => 'Spesialis nasi goreng pedas legendaris sejak 1990.',
        ]);

        Restaurant::create([
            'name' => 'Warung Safa',
            'description' => 'Local favorite'
        ]);
    }
}
