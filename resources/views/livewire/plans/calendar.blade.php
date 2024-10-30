<div >
    <div class=" py-16">
        <h1>´{{ $currentYear }}</h1>
        <h1>´{{ $currentMonth }}</h1>
        <div class="bg-gray-200 p-6 rounded-lg shadow-lg">
            <livewire:appointments-calendar
            week-starts-at="0"
            :key="now()->timestamp"
            :initialYear="$currentYear"
            :initialMonth="$currentMonth"
            :drag-and-drop-enabled="true"
            :idPlan="$idPlan"/>
        </div>
        <button wire:click="goToPreviousMonth" class="btn btn-primary">Mes Anterior
        </button>
        <button wire:click="goToCurrentMonth" class="btn btn-secondary">Mes Actual</button>
        <button wire:click="goToNextMonth" class="btn btn-primary">Mes Siguiente</button>
    </div>
</div>
