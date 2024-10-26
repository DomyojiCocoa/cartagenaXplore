<?php

namespace App\Livewire\Sites;

use App\Models\Site;
use Livewire\Component;

class MoreSites extends Component
{
    public $Sites;

    public function mount($id) {
        $this->Sites = Site::whereNotIn('id', [$id])
                  ->inRandomOrder()
                  ->limit(3)
                  ->get();
    }
    public function render()
    {
        return view('livewire.sites.more-sites');
    }
}
