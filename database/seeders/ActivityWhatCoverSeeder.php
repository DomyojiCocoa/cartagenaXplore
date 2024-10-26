<?php

namespace Database\Seeders;

use App\Models\Activities;
use App\Models\ActivityWhatCover;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ActivityWhatCoverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 200; $i++) {
            ActivityWhatCover::create([
                'info' => $faker->paragraph(3),
                'activity_id' => rand(1, Activities::count()),
            ]);
        }

    }
}
