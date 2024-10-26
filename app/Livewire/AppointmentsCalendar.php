<?php

namespace App\Livewire;

use App\Models\Activities;
use App\Models\ActivitiesPlan;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Support\Collection; // Cambia esta línea
use Livewire\Attributes\On;
use Livewire\Component;
use Omnia\LivewireCalendar\LivewireCalendar as LivewireCalendar;

class AppointmentsCalendar extends LivewireCalendar
{
    public $currentYear;
    public $currentMonth;
    public $idPlan ;



    public function goToPreviousMonth()
    {
        $date = Carbon::create($this->currentYear, $this->currentMonth)->subMonth();
        $this->currentYear = $date->year;
        $this->currentMonth = $date->month;
    }

    public function goToNextMonth()
    {
        $date = Carbon::create($this->currentYear, $this->currentMonth)->addMonth();
        $this->currentYear = $date->year;
        $this->currentMonth = $date->month;
    }

    public function goToCurrentMonth()
    {
        $this->currentYear = now()->year;
        $this->currentMonth = now()->month;
    }

    public function recibiendoPlan($id) {
        dd($id);
        // $this->idPlan =
    }

    public function events(): Collection
    {
        // dd($this->idPlan);
        $actividades = ActivitiesPlan::where('plan_id', $this->idPlan)->get();
        // dd($actividades);
        $fechas = [];

        $fechasActividad = Schedule::where('plan_id', $this->idPlan)->get();
        foreach ($fechasActividad as $fecha) {

            $fechas[$fecha->activities_id][] = $fecha->date;
        }
// dd($fechasActividad);
        $nose = $fechasActividad->pluck('activities_id');

        $Activida = Activities::whereIn('id', $nose)->get();


        return $Activida->map(function (Activities $activida) use ($fechas) {
            return [
                'id' => $activida->id,
                'title' => $activida->title,
                'description' => $activida->information_below,
                'date' => $fechas[$activida->id][0],
            ];
        });
    }
    public function onDayClick($year, $month, $day)
    {
        dd('asas1111111');
        // Lógica para manejar el clic en un día
        // Por ejemplo, podrías mostrar un formulario para crear un nuevo evento
    }

    public function onEventClick($eventId)
    {
        dd('345345634634634643');
        // Lógica para manejar el clic en un evento
        // Puedes mostrar detalles del evento o permitir editarlo
    }

    public function onEventDropped($eventId, $year, $month, $day)
    {
        // Busca el evento por su ID
        $event = Schedule::where('activities_id', $eventId)->first();

        // Verifica si el evento existe en la tabla Schedule
        if ($event) {
            // Actualiza la fecha del evento en la tabla Schedule
            $event->date = Carbon::create($year, $month, $day);
            $event->save();

            // Mensaje de éxito
            session()->flash('message', 'Fecha del evento actualizada correctamente.');
        } else {
            // Manejo del caso en el que no se encuentra el evento
            session()->flash('error', 'No se pudo encontrar el evento en la tabla Schedule.');
        }
    }

}