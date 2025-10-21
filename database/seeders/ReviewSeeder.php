<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\User;
use App\Models\Food;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first() ?? User::factory()->create(['name' => 'Safa Tester', 'email' => 'safa@example.com']);
        $food = Food::first();

        Review::create([
            'user_id' => $user->id,
            'food_id' => $food->id,
            'rating' => 5,
            'comment' => 'Rasanya luar biasa! Nasi gorengnya gurih dan pedasnya pas.',
        ]);
    }
}
