<?php

namespace App\Livewire\Plans;

use App\Models\Category;
use App\Models\Plan;
use Livewire\Component;

class Organize extends Component
{
    public $plansDefault;

    public function mount() {
        $this->plansDefault = Plan::where('user_id', 1)->get();
    }

    public function render()
    {
        return view('livewire.plans.organize');
    }
}
