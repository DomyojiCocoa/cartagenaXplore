<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class ListUsers extends Component
{
    use WithPagination;


    public $userIdBeingEdited;
    public $name = '';
    public $email = '';
    public $password = '';
    public $usernameNew;
    public $usersList;

    protected $paginationTheme = 'tailwind';

    public function mount() {

    }

    public function edit($userId)
    {

        $user = User::findOrFail($userId);
        $this->userIdBeingEdited = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function update($id)
    {

        $user = User::findOrFail($id);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->save();

        $this->reset(['name', 'email', 'userIdBeingEdited']);
    }



    public function create()
    {
        $this->reset(['name', 'email', 'password']);
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->reset(['name', 'email', 'password']);

        $this->redirectRoute('adminUsers');
    }

    public function delete($userId)
    {
        $user = User::findOrFail($userId);
        $user->delete();
        $this->redirectRoute('adminUsers');

    }

    public function render()
    {
        $users = User::withTrashed()->paginate(7);

        return view('livewire.admin.list-users', [
            'users' => $users,
        ]);
    }
}


