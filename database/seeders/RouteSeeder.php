<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Route;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activity1 = Activity::where('title', 'Walking Tour')->first();
        $activity2 = Activity::where('title', 'Museum Visit')->first();

        Route::create([
            'activity_id' => $activity1->id,
            'description' => 'Route through the old town square.'
        ]);

        Route::create([
            'activity_id' => $activity2->id,
            'description' => 'Museum district route.'
        ]);
    }
}
