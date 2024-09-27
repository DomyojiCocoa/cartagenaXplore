<?php

namespace App\Livewire\Login;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class Password extends Component
{
    #[Modelable]
    public $correo;
    
    public function render()
    {
        return view('livewire.login.password');
    }
}
