<?php

namespace Database\Seeders;

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
        for ($i = 0; $i < 10; $i++) {
            $actividad = rand(1,12);
            for ($k=0; $k < 3 ; $k++) {
                ActivitiesImage::create([
                    'activities_id' => $actividad,
                    'image_id' => rand(1,20),
                ]);
            }
        }
    }
}
