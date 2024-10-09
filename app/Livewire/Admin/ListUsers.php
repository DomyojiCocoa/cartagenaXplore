<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class ListUsers extends Component
{
    use WithPagination;

    public $editModalVisible = false; // Modal de edición
    public $createModalVisible = false; // Modal de creación
    public $userIdBeingEdited;
    public $name;
    public $email;
    public $password;

    protected $paginationTheme = 'tailwind';

    // Abrir modal de edición
    public function edit($userId)
    {
        $this->editModalVisible = true;
        $user = User::findOrFail($userId);
        $this->userIdBeingEdited = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    // Actualizar usuario
    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $user = User::findOrFail($this->userIdBeingEdited);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->save();

        $this->editModalVisible = false;
        $this->reset(['name', 'email', 'userIdBeingEdited']);
    }

    // Cerrar modal de edición
    public function closeModal()
    {
        $this->editModalVisible = false;
        $this->reset(['name', 'email', 'userIdBeingEdited']);
    }

    // Abrir modal de creación
    public function create()
    {
        $this->reset(['name', 'email', 'password']); // Limpiar campos
        $this->createModalVisible = true;
    }

    // Crear nuevo usuario
    public function store()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8', // Validación del password
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password), // Hashear el password
        ]);

        $this->createModalVisible = false;
        $this->reset(['name', 'email', 'password']);
    }

    // Cerrar modal de creación
    public function closeCreateModal()
    {
        $this->createModalVisible = false;
        $this->reset(['name', 'email', 'password']);
    }

    public function render()
    {
        return view('livewire.admin.list-users', [
            'users' => User::paginate(10),
        ]);
    }
}

    // use WithPagination;

    // // Opción para usar el tema de Tailwind en la paginación
    // protected $paginationTheme = 'tailwind';

    // public function edit($userId)
    // {
    //     // Lógica para editar el usuario
    // }

    // public function delete($userId)
    // {
    //     $user = User::findOrFail($userId);
    //     $user->delete();

    //     // La paginación se actualiza automáticamente.
    // }

    // public function render()
    // {
    //     return view('livewire.admin.list-users', [
    //         'users' => User::paginate(10), // Paginación de 10 usuarios por página
    //     ]);
    // }
