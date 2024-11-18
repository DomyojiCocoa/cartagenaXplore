<?php

namespace App\Livewire\Admin;

use App\Models\Activities;
use Livewire\Component;

class ListActivities extends Component
{

    public function delete($activityId)
    {
        $activi = Activities::findOrFail($activityId);
        $activi->delete();
        $this->redirectRoute('adminActivities');

    }

    public function render()
    {
        $actividades = Activities::withTrashed()->paginate(7);
        return view('livewire.admin.list-activities', [
            'actividades' => $actividades,
        ]);
    }
}
