<?php

namespace App\Livewire;

use App\Models\Activities;
use App\Models\ActivitiesPlan;
use App\Models\Schedule;
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
        $this->idPlan = $idPlan;
        $this->activities = ActivitiesPlan::where('plan_id' , $idPlan)->get();
        $this->page = 1;
        $this->moreActivities = Activities::whereNotIn('id', $this->activities->pluck('activity_id'))->get();
    }
    public function addActivity($activityId)
    {
        ActivitiesPlan::create([
            'plan_id' => $this->idPlan,
            'activity_id' => $activityId,
        ]);

        $this->activities = ActivitiesPlan::where('plan_id', $this->idPlan)->get();
        $this->moreActivities = Activities::whereNotIn('id', $this->activities->pluck('activity_id'))->get();
    }

    public function removeActivity($activityId)
    {
        ActivitiesPlan::where('plan_id', $this->idPlan)
                      ->where('activity_id', $activityId)
                      ->delete();

        $this->activities = ActivitiesPlan::where('plan_id', $this->idPlan)->get();
        $this->moreActivities = Activities::whereNotIn('id', $this->activities->pluck('activity_id'))->get();
    }

    public function next() {
        $this->page = 2;
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
