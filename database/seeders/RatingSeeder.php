<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first(); // Assumes there is a user in the database
        $activity = Activity::where('title', 'Walking Tour')->first();

        Rating::create([
            'activity_id' => $activity->id,
            'user_id' => $user->id,
            'score' => 5
        ]);
    }
}
