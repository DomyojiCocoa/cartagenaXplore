<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = ['Colombia', 'United States', 'Brazil', 'Argentina', 'Germany'];
        foreach ($countries as $country) {
            Country::create(['name' => $country]);
        }
    }
}
