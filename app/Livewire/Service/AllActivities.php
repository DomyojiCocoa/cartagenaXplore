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
    public $search = '';

    public function render()
    {
        $activity = Activities::inRandomOrder()->paginate(6);

        return view('livewire.service.all-activities', [
            'activities' => $activity,
        ]);

    }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatedPage()
    {
        // Livewire manejará automáticamente la paginación
    }
}
