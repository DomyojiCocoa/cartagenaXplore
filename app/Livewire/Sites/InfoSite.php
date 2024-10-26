<?php

namespace App\Livewire\Sites;

use App\Models\Site;
use App\Models\SiteImage;
use Livewire\Component;

class InfoSite extends Component
{
    public $site;
    public $photos;

    public function mount($id) {
        $this->site = Site::find($id);
        $this->photos = SiteImage::where('site_id', $id)->get();
    }
    public function render()
    {
        return view('livewire.sites.info-site');
    }
}
