<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class InfoModal extends Component
{
    public $user;
    public $isOpen = false;

    protected $listeners = ['openModal'];

    public function openModal(User $user)
    {
        $this->user = $user;
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.admin.users.info-modal');
    }
}
