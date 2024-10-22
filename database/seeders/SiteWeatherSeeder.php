<?php

namespace Database\Seeders;

use App\Models\Site;
use App\Models\Weather;
use App\Models\WeatherCondition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteWeatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $site = Site::where('name', 'Central Park')->first();
        $weather = WeatherCondition::where('name', 'Sunny')->first();

        $site->weathers()->attach($weather->id);
    }
}
