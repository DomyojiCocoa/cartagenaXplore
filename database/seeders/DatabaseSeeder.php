<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Activities;
use App\Models\ActivitiesImage;
use App\Models\ActivitiesPlan;
use App\Models\ActivityTodo;
use App\Models\ActivityWhatCover;
use App\Models\Category;
use App\Models\CommentsActivities;
use App\Models\Image;
use App\Models\Plan;
use App\Models\RatingActivities;
use App\Models\Site;
use App\Models\SiteImage;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ImageSeeder::class,
            ActivitiesSeeder::class,
            SiteSeeder::class,
            CommentActivitySeeder::class,
            ActivityWhatCoverSeeder::class,
            ActivityTodoSeeder::class,
            ActivitiesImageSeeder::class,
            PlanSeeder::class,
            ActivitiesPlanSeeder::class,
            ScheduleSeeder::class,
        ]);
    }
}
