<?php

namespace Database\Seeders;

use App\Models\Weather;
use App\Models\WeatherCondition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WeatherCondition::create(['name' => 'Sunny']);
        WeatherCondition::create(['name' => 'Rainy']);
        WeatherCondition::create(['name' => 'Cloudy']);
        WeatherCondition::create(['name' => 'Stormy']);
    }
}
