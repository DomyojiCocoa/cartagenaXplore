<?php

namespace App\Livewire\Register;

use Livewire\Component;

class Steps extends Component
{
    public $pagina;
    
    public function render()
    {
        return view('livewire.register.steps');
    }
}
