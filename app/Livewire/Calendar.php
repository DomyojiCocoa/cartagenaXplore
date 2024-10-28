<?php
namespace App\Livewire;

use App\Models\Activities;
use App\Models\ActivitiesPlan;
use App\Models\Plan;
use App\Models\Schedule;
use Auth;
use Carbon\Carbon;
use Livewire;
use Livewire\Component;

class Calendar extends Component
{
    public $activities;
    public $activiesDate;
    public $page;
    public $idPlan;
    public $idActividad;
    public $moreActivities;
    public $dateCalendar;
    public $dates = []; // Cambia esto a una propiedad pública para acumular fechas
    public $idActividades = [];
    public $edit;
    public $activo;

    public function mount($idPlan) {
        $this->page = 1;
        $this->edit = 1;
        $this->idPlan = $idPlan;
        $this->activo = Plan::find($idPlan);
        $this->activities = ActivitiesPlan::where('plan_id', $idPlan)->get();
        $this->moreActivities = Activities::whereNotIn('id', $this->activities->pluck('activity_id'))->get();
        foreach ($this->activities as $activity) {
            $this->idActividades[$activity->activity->id] = $activity->activity->id; // Inicializa el array con los IDs
        }
    }

    public function nextEdit() {
        $this->edit = 2;
    }
    public function backEdit() {
        $this->edit = 1;
    }
    public function addActivity($activityId)
    {
        ActivitiesPlan::create([
            'plan_id' => $this->idPlan,
            'activity_id' => $activityId,
        ]);
        Schedule::create([
            'plan_id' => $this->idPlan,
            'activities_id' => $activityId,
            'user_id' => 1, // Cambia a Auth::id() para usar el usuario autenticado
        ]);

        $this->activities = ActivitiesPlan::where('plan_id', $this->idPlan)->get();
        $this->moreActivities = Activities::whereNotIn('id', $this->activities->pluck('activity_id'))->get();
    }

    public function updatedDateCalendar($value)
    {
        // Llama a cualquier función o ejecuta la lógica necesaria con la fecha seleccionada
        $this->procesarFecha(); // Llama a procesarFecha cuando se actualiza la fecha
    }

    public function procesarFecha()
    {
        if ($this->dateCalendar) {
            $this->dates[] = $this->dateCalendar; // Agrega la fecha al array de fechas
        }
    }

    public function removeActivity($activityId)
    {
        ActivitiesPlan::where('plan_id', $this->idPlan)
                      ->where('activity_id', $activityId)
                      ->delete();
        Schedule::where('plan_id', $this->idPlan)
                      ->where('activities_id', $activityId)
                      ->delete();

        $this->activities = ActivitiesPlan::where('plan_id', $this->idPlan)->get();
        $this->moreActivities = Activities::whereNotIn('id', $this->activities->pluck('activity_id'))->get();
    }

    public function next() {
        $this->page = 2; // Cambia a la siguiente página

        if (empty($this->dates)) {
            session()->flash('error', 'No hay fechas seleccionadas.');
            return;
        }

        // Agrega la fecha a cada actividad en el plan
        foreach ($this->activities as $activity) {
            foreach ($this->dates as $date) { // Itera sobre las fechas acumuladas
                Schedule::updateOrCreate(
                    [
                        'plan_id' => $this->idPlan,
                        'activities_id' => $activity->activity_id,
                        'user_id' => 1, // Usa el ID del usuario autenticado
                         // Asegúrate de que sea el ID correcto
                    ],
                    [
                        'date' => $date, // Agrega la fecha seleccionada
                        'user_id' => 1, // Usa el ID del usuario autenticado
                    ]
                );
            }
        }

        $this->dispatch('pasando', $this->idPlan);
    }

    public function back() {
        $this->page = 1;
    }

    public function render()
    {
        return view('livewire.calendar', [
            'planId' => $this->idPlan,
        ]);
    }
}

