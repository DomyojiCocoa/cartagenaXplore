<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Cover;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activity1 = Activity::where('title', 'Walking Tour')->first();
        $activity2 = Activity::where('title', 'Museum Visit')->first();

        Cover::create([
            'activity_id' => $activity1->id,
            'description' => 'Covers guided historical sites.'
        ]);

        Cover::create([
            'activity_id' => $activity2->id,
            'description' => 'Covers admission to all museums.'
        ]);
    }
}
