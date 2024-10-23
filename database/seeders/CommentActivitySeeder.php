<?php

namespace Database\Seeders;

use App\Models\CommentsActivities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class CommentActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            CommentsActivities::create([
                'comment' => $faker->paragraph(10),
                'user_id' => rand(1, 15),
                'activity_id' => rand(1, 12),
            ]);
        }
    }
}
