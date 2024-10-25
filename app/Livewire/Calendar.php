<?php

namespace App\Livewire;

use App\Models\Activities;
use App\Models\ActivitiesPlan;
use App\Models\Schedule;
use Livewire\Component;

class Calendar extends Component
{
    public $activities;
    public $activiesDate;
    public $page;
    public $idPlan;
    public $moreActivities;

    public function mount($idPlan) {
        $this->idPlan = $idPlan;
        $this->activities = ActivitiesPlan::where('plan_id' , $idPlan)->get();
        $this->page = 1;
        $this->moreActivities = Activities::whereNotIn('id', $this->activities->pluck('activity_id'))->get();
        $this->events = $this->getEvents();

    }
    public function addActivity($activityId)
    {
        // Agregar la actividad a la tabla intermedia ActivitiesPlan (o lo que corresponda)
        ActivitiesPlan::create([
            'plan_id' => $this->idPlan,
            'activity_id' => $activityId,
        ]);

        // Actualizar la lista de actividades y la lista de más actividades
        $this->activities = ActivitiesPlan::where('plan_id', $this->idPlan)->get();
        $this->moreActivities = Activities::whereNotIn('id', $this->activities->pluck('activity_id'))->get();
    }

    public function removeActivity($activityId)
    {
        // Eliminar la actividad de la tabla intermedia ActivitiesPlan
        ActivitiesPlan::where('plan_id', $this->idPlan)
                      ->where('activity_id', $activityId)
                      ->delete();

        // Actualizar la lista de actividades y la lista de más actividades
        $this->activities = ActivitiesPlan::where('plan_id', $this->idPlan)->get();
        $this->moreActivities = Activities::whereNotIn('id', $this->activities->pluck('activity_id'))->get();
    }

    public function next() {
        $this->page = 2;
    }
    public function back() {
        $this->page = 1;
    }

    public function getEvents()
    {
        return [
            ['title' => 'Evento 1', 'start' => '2024-10-25'],
            ['title' => 'Evento 2', 'start' => '2024-10-26'],
        ];
    }

    public function addEvent($eventData)
    {
        // Guardar el evento en la base de datos
        // Ejemplo simple de agregar un evento
        $this->events[] = [
            'title' => $eventData['title'],
            'start' => $eventData['start'],
        ];

        // Puedes hacer lógica adicional para almacenar en BD, luego
        $this->dispatchBrowserEvent('event-added', ['events' => $this->events]);
    }
    public function render()
    {
        return view('livewire.calendar');
    }
}
