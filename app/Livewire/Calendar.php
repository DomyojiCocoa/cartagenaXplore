<?php

namespace App\Livewire;

use App\Models\Activities;
use Livewire\Component;

class Calendar extends Component
{
    public $activities;
    public $activiesDate;
    public function mount() {
        $this->activities = Activities::all();
        $this->activiesDate = Activities::all();

    }


    public function render()
    {
        return view('livewire.calendar');
    }
}
