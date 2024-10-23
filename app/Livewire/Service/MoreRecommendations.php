<?php

namespace App\Livewire\Service;

use App\Models\Activities;
use Livewire\Component;

class MoreRecommendations extends Component
{

    public function render()
    {
        $activity = Activities::inRandomOrder()->limit(3)->get();

        return view('livewire.service.more-recommendations', [
            'activities' => $activity,
        ]);
    }
}
