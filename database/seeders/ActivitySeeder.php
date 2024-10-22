<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activity::create([
            'title' => 'Walking Tour',
            'description' => 'A tour through the historical parts of the city.',
            'duration' => 2,
            'average_rating' => 4.5
        ]);

        Activity::create([
            'title' => 'Museum Visit',
            'description' => 'A guided tour through the city’s main museums.',
            'duration' => 3,
            'average_rating' => 4.2
        ]);
    }
}
