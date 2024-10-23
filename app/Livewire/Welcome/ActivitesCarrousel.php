<?php

namespace App\Livewire\Welcome;

use App\Models\Site;
use Livewire\Component;

class ActivitesCarrousel extends Component
{
    public $sites;

    public function mount() {
        $this->sites = Site::inRandomOrder()->limit(3)->get();
    }
    
    public function render()
    {
        return view('livewire.welcome.activites-carrousel');
    }
}
