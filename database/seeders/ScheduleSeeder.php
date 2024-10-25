<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schedule::create([
            'plan_id' => '1',
            'activities_id' => '2',
            'user_id' => '1',
            'date' => '2024-10-31',
        ]);
        Schedule::create([
            'plan_id' => '1',
            'activities_id' => '1',
            'user_id' => '1',
            'date' => '2024-10-30',
        ]);
        Schedule::create([
            'plan_id' => '1',
            'activities_id' => '4',
            'user_id' => '1',
            'date' => '2024-10-26',
        ]);
        Schedule::create([
            'plan_id' => '1',
            'activities_id' => '3',
            'user_id' => '1',
            'date' => '2024-10-27',
        ]);
        Schedule::create([
            'plan_id' => '1',
            'activities_id' => '6',
            'user_id' => '1',
            'date' => '2024-10-28',
        ]);
        Schedule::create([
            'plan_id' => '2',
            'activities_id' => '2',
            'user_id' => '1',
            'date' => '2024-10-25',
        ]);
        Schedule::create([
            'plan_id' => '2',
            'activities_id' => '1',
            'user_id' => '1',
            'date' => '2024-10-25',
        ]);
        Schedule::create([
            'plan_id' => '2',
            'activities_id' => '4',
            'user_id' => '1',
            'date' => '2024-10-26',
        ]);
        Schedule::create([
            'plan_id' => '2',
            'activities_id' => '3',
            'user_id' => '1',
            'date' => '2024-10-27',
        ]);
        Schedule::create([
            'plan_id' => '2',
            'activities_id' => '6',
            'user_id' => '1',
            'date' => '2024-10-28',
        ]);

    }
}
