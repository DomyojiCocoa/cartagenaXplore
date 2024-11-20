<?php

namespace App\Livewire;

use Livewire\Component;

class SimpleModal extends Component
{
    public $isOpen = false;
    public $name = '';
    public $description = '';

    public function render()
    {
        return view('livewire.simple-modal');
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
        $this->resetFields();
    }

    private function resetFields()
    {
        $this->name = '';
        $this->description = '';
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|min:2',
            'description' => 'required|min:10',
        ]);

        // Aquí puedes hacer algo con los datos, como enviar un email o guardar en sesión
        // Por ahora, solo mostraremos un mensaje de éxito
        session()->flash('message', 'Formulario enviado con éxito.');

        $this->closeModal();
    }
}
