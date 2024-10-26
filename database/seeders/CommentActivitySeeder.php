<?php

namespace Database\Seeders;

use App\Models\Activities;
use App\Models\CommentsActivities;
use App\Models\User;
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
        for ($i = 0; $i < 100; $i++) {
            CommentsActivities::create([
                'comment' => $faker->paragraph(5),
                'user_id' => rand(1, User::count()),
                'activity_id' => rand(1, Activities::count()),
            ]);
        }
    }
}
