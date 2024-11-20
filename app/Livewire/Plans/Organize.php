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
    public $modal = false;
    public $plans = [
        [
            'name' => 'Plan Gratuito',
            'description' => 'Perfecto para empezar',
            'price' => '0',
            'features' => [
                '5 GB de almacenamiento',
                'Acceso a la comunidad',
                'Widgets básicos',
                'Soporte por email',
            ],
            'cta' => 'Comenzar Gratis',
            'is_premium' => false,
        ],
        [
            'name' => 'Plan Premium',
            'description' => 'Para usuarios exigentes',
            'price' => '20.000',
            'features' => [
                'Almacenamiento ilimitado',
                'Acceso prioritario a nuevas funciones',
                'Widgets avanzados y personalizables',
                'Soporte prioritario 24/7',
                'Integración con herramientas premium',
                'Reportes y análisis avanzados',
            ],
            'cta' => 'Obtener Premium',
            'is_premium' => true,
        ],
    ];


    public $plansDefault;
    public $planCount;

    public function mostrarModal()
    {
        $this->modal = true;  // Establecer en true para mostrar el modal
    }

    public function ocultarModal()
    {
        $this->modal = false;  // Establecer en false para ocultar el modal
    }
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
