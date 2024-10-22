<?php

namespace Database\Seeders;

use App\Models\Site;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Site::create([
            'name' => 'Central Park',
            'address' => '123 Park Ave',
            'opening_time' => '08:00:00',
            'closing_time' => '18:00:00'
        ]);

        Site::create([
            'name' => 'National Museum',
            'address' => '456 Museum St',
            'opening_time' => '09:00:00',
            'closing_time' => '17:00:00'
        ]);
    }
}
