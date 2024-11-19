<?php

namespace App\Livewire;

use App\Models\Activities;
use Livewire\Component;
use Livewire\WithPagination;

class Map extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatedPage()
    {
        // Livewire manejará automáticamente la paginación
    }
    public function render()
    {
        $activity = Activities::inRandomOrder()->paginate(3);
        return view('livewire.map', [
            'activities' => $activity,
        ]);
    }
}
