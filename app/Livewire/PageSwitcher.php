<?php

namespace App\Livewire;

use Livewire\Component;

class PageSwitcher extends Component
{
    public $page = 1;

    public function switchToPage($page)
    {
        $this->page = $page;
    }
    public function render()
    {
        return view('livewire.page-switcher');
    }
}
