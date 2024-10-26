<?php

namespace App\Livewire;

use App\Models\Activities;
use App\Models\ActivitiesPlan;
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
    public $moreActivities;

    public function mount($idPlan) {
        $this->page = 1;
        $this->idPlan = $idPlan;
        $this->activities = ActivitiesPlan::where('plan_id' , $idPlan)->get();
        $this->moreActivities = Activities::whereNotIn('id', $this->activities->pluck('activity_id'))->get();
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
            'user_id' => 1,
            'date' => '2024-10-27',
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

    public function next() {
        $this->page = 2;
        $this->dispatch('pasando',$this->idPlan );
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
