<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;

class ComponentViewer extends Component
{
    public $opcionM;
    public $caso;

    public function mount($caso){
        $this->caso= $caso;
    }

    #[On('opcion')]
    public function mostrarComponente($caso)
    {
        $this->opcionM =$caso;

    }

    public function render()
    {
        return view('livewire.admin.component-viewer');
    }
}
