<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        // $this->call(SiteSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call([
        //     CountrySeeder::class,
        //     ActivitySeeder::class,
        //     RouteSeeder::class,
        //     CoverSeeder::class,
        //     SiteSeeder::class,
        //     WeatherSeeder::class,
        //     SiteWeatherSeeder::class,
        //     EventSeeder::class,
        //     ImageSeeder::class,
        //     RatingSeeder::class,
        // ]);

    }
}
