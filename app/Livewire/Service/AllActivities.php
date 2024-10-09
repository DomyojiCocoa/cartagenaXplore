<?php

namespace App\Livewire\Service;

use App\Models\Site;
use Livewire\Component;
use Livewire\WithPagination;

class AllActivities extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public function render()
    {
        // Obtén la paginación aquí en lugar de en mount
        $sites = Site::paginate(3);

        return view('livewire.service.all-activities', [
            'sites' => $sites,
        ]);
    }

    public function updatedPage()
    {
        // Livewire manejará automáticamente la paginación
    }
}
