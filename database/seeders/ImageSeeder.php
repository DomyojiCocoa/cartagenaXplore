<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Event;
use App\Models\Image;
use App\Models\Site;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activity = Activity::where('title', 'Walking Tour')->first();
        $event = Event::where('title', 'Concert in the Park')->first();
        $site = Site::where('name', 'Central Park')->first();

        Image::create([
            'url' => 'https://i.pinimg.com/736x/2a/88/7b/2a887b44e0680105a850832c48d16582.jpg',
            'related_id' => $activity->id,
            'relation_type' => 'activity'
        ]);

        Image::create([
            'url' => 'https://i.pinimg.com/736x/2a/88/7b/2a887b44e0680105a850832c48d16582.jpg',
            'related_id' => $event->id,
            'relation_type' => 'event'
        ]);

        Image::create([
            'url' => 'https://i.pinimg.com/736x/2a/88/7b/2a887b44e0680105a850832c48d16582.jpg',
            'related_id' => $site->id,
            'relation_type' => 'site'
        ]);
    }
}
