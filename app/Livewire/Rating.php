<?php

namespace App\Livewire;

use Livewire\Component;
use WithPagination;
class Rating extends Component
{
    public $rating = 0;

    public function mount($initialRating = 0)
    {
        $this->rating = $initialRating;
    }

    public function render()
    {
        return view('livewire.rating');
    }
}
