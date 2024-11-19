<?php

namespace App\Livewire\Plans;

use App\Models\Activities;
use App\Models\ActivitiesPlan;
use App\Models\Plan;
use App\Models\User;
use Auth;
use Livewire\Component;

class Organize extends Component
{
    public $plansDefault;
    public $planCount;

    public function mount() {
        $this->plansDefault = Plan::where('user_id', 1)->get();
        $this->planCount = Plan::count();
    }

    public function prueba($id) {

        $activities = ActivitiesPlan::where('plan_id', $id)->get();
        $plan = Plan::find($id);
        $planCreated = Plan::create([
            'name' => $plan->name,
            'user_id' => Auth::user()->id,
            'url_img' => $plan->url_img,
        ]);
        
        foreach ($activities as $key => $activity) {
            ActivitiesPlan::created([
                'activity_id' => $activity->id,
                'plan_id' => $planCreated->id,
            ]);
        }
    }
    
    public function render()
    {
        return view('livewire.plans.organize');
    }
}
