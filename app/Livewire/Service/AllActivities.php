<?php

namespace App\Livewire\Service;

use App\Models\Activities;
use App\Models\Site;
use Livewire\Component;
use Livewire\WithPagination;

class AllActivities extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public function render()
    {
        $activity = Activities::paginate(3);

        return view('livewire.service.all-activities', [
            'activities' => $activity,
        ]);

    }
    public function updatingPage()
    {
        // $this->resetPage();
    }

    public function updatedPage()
    {
        // Livewire manejará automáticamente la paginación
    }
}
