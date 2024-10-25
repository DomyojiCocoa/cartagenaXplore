<?php

namespace Database\Seeders;

use App\Models\ActivitiesPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitiesPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ActivitiesPlan::create([
            'activity_id' => '1',
            'plan_id' => '1',
        ]);
        ActivitiesPlan::create([
            'activity_id' => '2',
            'plan_id' => '1',
        ]);
        ActivitiesPlan::create([
            'activity_id' => '3',
            'plan_id' => '1',
        ]);
        ActivitiesPlan::create([
            'activity_id' => '4',
            'plan_id' => '1',
        ]);
        ActivitiesPlan::create([
            'activity_id' => '5',
            'plan_id' => '1',
        ]);

        ActivitiesPlan::create([
            'activity_id' => '6',
            'plan_id' => '2',
        ]);
        ActivitiesPlan::create([
            'activity_id' => '7',
            'plan_id' => '2',
        ]);
        ActivitiesPlan::create([
            'activity_id' => '8',
            'plan_id' => '2',
        ]);


        ActivitiesPlan::create([
            'activity_id' => '9',
            'plan_id' => '3',
        ]);
        ActivitiesPlan::create([
            'activity_id' => '10',
            'plan_id' => '3',
        ]);
        ActivitiesPlan::create([
            'activity_id' => '11',
            'plan_id' => '3',
        ]);
        ActivitiesPlan::create([
            'activity_id' => '12',
            'plan_id' => '3',
        ]);
    }
}
