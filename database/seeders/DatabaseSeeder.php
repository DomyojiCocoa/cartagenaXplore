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
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(ActivitiesSeeder::class);
        $this->call(SiteSeeder::class);
        $this->call(CommentActivitySeeder::class);
        $this->call(ActivityWhatCoverSeeder::class);
        $this->call(ActivityTodoSeeder::class);
        $this->call(ActivitiesImageSeeder::class);
    }
}
