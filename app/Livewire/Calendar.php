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
    public $dateCalendar = [];
    public $dates = [];
    public $idActividades = [];
    public $edit;
    public $activo;

    public function mount($idPlan)
    {
        $this->page = 1;
        $this->edit = 1;
        $this->idPlan = $idPlan;
        $this->activo = Plan::find($idPlan);
        $this->activities = ActivitiesPlan::where('plan_id', $idPlan)->get();
        $this->moreActivities = Activities::whereNotIn('id', $this->activities->pluck('activity_id'))->get();
        $id = $this->activities->pluck('id');


        $sql = Schedule::whereIn('activities_id', $id)->where('plan_id', $this->idPlan)->get();
        foreach ($this->activities as $key => $activity) {
            $this->idActividades[$activity->activity->id] = $activity->activity->id;
            if (isset($sql[$key]) && isset($sql[$key]->date)) {
                $this->dateCalendar[$activity->id]  = $sql[$key]->date;
            }
        }

    }

    public function nextEdit()
    {
        $this->edit = 2;
    }
    public function backEdit()
    {
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
            'user_id' => Auth::user()->id,
        ]);

        $this->activities = ActivitiesPlan::where('plan_id', $this->idPlan)->get();
        $this->moreActivities = Activities::whereNotIn('id', $this->activities->pluck('activity_id'))->get();
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

    public function next()
    {

        $this->page = 2;



        foreach ($this->dateCalendar as $key => $date) {
            Schedule::updateOrCreate(
                [
                    'plan_id' => $this->idPlan,
                    'activities_id' => $key,
                    'user_id' => Auth::user()->id,
                ],
                [
                    'date' => $date, 
                    'user_id' => Auth::user()->id,
                ]
            );
        }

        $this->dispatch('pasando', $this->idPlan);
    }

    public function back()
    {
        $this->page = 1;
    }

    public function render()
    {
        return view('livewire.calendar', [
            'planId' => $this->idPlan,
        ]);
    }
}
