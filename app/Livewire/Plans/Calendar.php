<?php

namespace App\Livewire\Plans;

use Carbon\Carbon;
use Livewire\Component;

class Calendar extends Component
{
    public $currentYear;
    public $currentMonth;
    public $idPlan;
    public function mount( $idPlan)
    {
        $this->currentYear = $initialYear ?? now()->year;
        $this->currentMonth = $initialMonth ?? now()->month;
        $this->idPlan = $idPlan;
    }

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
    public function render()
    {
        return view('livewire.plans.calendar');
    }
}
