<?php

namespace App\Livewire\Register;

use App\Models\User; // Asegúrate de importar el modelo User
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
    #[Modelable]
    public $name; // Añadido para el nombre completo
    #[Modelable]
    public $country; // Añadido para el país
    #[Modelable]
    public $birthdate; // Añadido para la fecha de nacimiento

    protected $rules = [
        'email' => 'required|email|unique:users,email', // Asegúrate de que el email sea único
        'password' => 'required|min:6',
        'name' => 'required|string|max:255',
        'country' => 'required|string|max:255',
        'birthdate' => 'required|date', // Valida que sea una fecha
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

    public function crearUsuario() {
        // Valida los campos
        $this->validate();

        // Crea el usuario en la base de datos
        User::create([
            'email' => $this->email,
            'password' => bcrypt($this->password), // Asegúrate de encriptar la contraseña
            'name' => $this->name,
            'country' => $this->country,
            'birthdate' => $this->birthdate,
        ]);

        // Redirige o muestra un mensaje de éxito
        session()->flash('message', 'Usuario creado con éxito.');
        return redirect()->route('login'); // Cambia esto a la ruta de inicio de sesión
    }

    public function atras() {
        $this->pagina = 1;
    }

    public function render()
    {
        return view('livewire.register.steps');
    }
}
