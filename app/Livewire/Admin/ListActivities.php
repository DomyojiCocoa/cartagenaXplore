<?php

namespace App\Livewire\Admin;

use App\Models\Activities;
use Livewire\Component;

class ListActivities extends Component
{

    public $mostrarModal = false;
    public $actividadDetalle;
    public $mostrarModal2 = false;
    public $actividadUpdate;
    public $name;
    public $description;
    public $img;



    public function open() {
        $this->mostrarModal = true;
    }
    public function pruebanoc(Activities $actividad) {
        $this->mostrarModal2 = true;
        $this->actividadUpdate = $actividad;
        $this->name = $actividad->title;
        $this->description = $actividad->information_below;
        $this->img = $actividad->url_img;

        // dd($this->actividadUpdate);
    }

    public function mostrarActividad($id)
    {
        $this->actividadDetalle = Activities::find($id);
        $this->mostrarModal = true;
    }

    public function prueba() {
        dd($this->actividadDetalle);
    }

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
