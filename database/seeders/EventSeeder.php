<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'title' => 'Concert in the Park',
            'description' => 'A live concert featuring local bands.',
            'start_date' => '2024-10-25',
            'end_date' => '2024-10-25',
            'location' => 'Central Park'
        ]);

        Event::create([
            'title' => 'Art Exhibition',
            'description' => 'A showcase of modern art.',
            'start_date' => '2024-11-01',
            'end_date' => '2024-11-10',
            'location' => 'National Museum'
        ]);
    }
}
