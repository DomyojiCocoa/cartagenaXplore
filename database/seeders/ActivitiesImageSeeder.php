<?php

namespace Database\Seeders;

use App\Models\Activities;
use App\Models\ActivitiesImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitiesImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $actividad = rand(1,Activities::count());
            for ($k=0; $k < 5; $k++) {
                ActivitiesImage::create([
                    'activities_id' => $actividad,
                    'image_id' => rand(1,20),
                ]);
            }
        }
    }
}
