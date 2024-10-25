<?php

namespace App\Livewire\Sites;

use App\Models\Site;
use Livewire\Component;

class AllSites extends Component
{
    public $sites;

    public function mount() {
        $this->sites = Site::all();
    }

    public function render()
    {
        return view('livewire.sites.all-sites');
    }
}
