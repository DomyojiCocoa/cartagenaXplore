<?php

namespace App\Livewire\Plans;

use App\Models\Activities;
use App\Models\ActivitiesPlan;
use App\Models\Plan;
use App\Models\User;
use Auth;
use Livewire\Component;
use Mail;

class Organize extends Component
{
    public $modalPlans = false;
    public $modalBuy = false;

    public $plans = [
        [
            'name' => 'Plan Gratuito',
            'description' => 'Perfecto para empezar',
            'price' => '0',
            'features' => [
                'Acceder a informacion basica de la ciudad',
            ],
            'cta' => 'Tienes este plan',
            'is_premium' => false,
        ],
        [
            'name' => 'Plan Premium',
            'description' => 'Para usuarios exigentes',
            'price' => '20000',
            'features' => [
                'Acceder a informacion de la ciudad',
                'Acceso al creador de planes',
                'Poder crear tu propio plan a tu ritmo!',
                'Calificar actividades',
                'Comentar en la pagina principal',
            ],
            'cta' => 'Obtener Premium',
            'is_premium' => true,
        ],
    ];

    public $plansDefault;
    public $planCount;
    public function mostrarModal4()
    {
        Auth::user()->update(['membership' => 'premium']);
        $this->modalBuy = true;  // Establecer en true para mostrar el modal
        try {
            Mail::raw('Usted ha realizado con exito la compra del Plan Premium de CartagenaXplore', function ($message) {
                $message->to('felmenyt123@gmail.com')
                        ->subject('Compra en CartagenaXplore')
                        ->attach(public_path('img/shop.png'));
            });
            return 'Correo enviado con éxito.';
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function ocultarModal4()
    {
        $this->modalBuy = false;
        $this->modalPlans = false;   // Establecer en false para ocultar el modal
    }
    public function mostrarModal3()
    {
        $this->modalPlans = true;  // Establecer en true para mostrar el modal
    }

    public function ocultarModal3()
    {
        $this->modalPlans = false;  // Establecer en false para ocultar el modal
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
