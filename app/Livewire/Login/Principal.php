<?php

namespace App\Livewire\Login;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class Principal extends Component
{
    public $pagina;
    
    #[Modelable]
    public $correo;
    public $contraseña;

    public function mount() {
        $this->pagina = 1;
    }

    public function siguiente() {
        $this->pagina = 2;
    }

    public function render()
    {
        return view('livewire.login.principal');
    }
}
