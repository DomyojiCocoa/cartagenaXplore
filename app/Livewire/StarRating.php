<?php

namespace App\Livewire;

use Livewire\Component;

class StarRating extends Component
{
    public $rating = 0;

    public function mount($initialRating = 0)
    {
        $this->rating = $initialRating;
    }

    public function setRating($value)
    {
        $this->rating = $value;
    }


    public function render()
    {
        return view('livewire.star-rating');
    }
}
