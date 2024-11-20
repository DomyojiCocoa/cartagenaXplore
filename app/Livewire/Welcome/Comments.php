<?php

namespace App\Livewire\Welcome;

use App\Models\CommentsActivities;
use Livewire\Component;

class Comments extends Component
{
    public function render()
    {
        $comentarios = CommentsActivities::inRandomOrder()->take(3)->get();

        return view('livewire.welcome.comments', [
            'comentarios' => $comentarios,
        ]);
    }
}
