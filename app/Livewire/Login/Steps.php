<?php

namespace App\Livewire\Login;

use Illuminate\Support\Facades\Auth;
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

    public $remember = false;
    public $errorMessage;

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
    public function atras() {
        $this->pagina = 1;
    }

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            session()->regenerate();
            return redirect()->intended('/dashboard');
        }
    }

    public function render()
    {
        return view('livewire.login.steps');
    }
}
