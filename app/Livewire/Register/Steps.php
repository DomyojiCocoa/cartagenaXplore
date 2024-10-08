<?php

namespace App\Livewire\Register;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class Steps extends Component
{
    #[Modelable]
    public $email;
    #[Modelable]
    public $password;
    #[Modelable]
    public $pagina;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public function mount() {
        $this->pagina = 1;
    }

    public function siguiente() {
        $this->pagina = 2;
        if (strpos($this->email, '@') === false || strpos($this->email, '.') === false) {
            $this->pagina = 1;
        }

    }
    public function siguiente2() {
        $this->pagina = 3;


    }

    public function atras() {
        $this->pagina = 1;
    }

    public function render()
    {
        return view('livewire.register.steps');
    }
}
