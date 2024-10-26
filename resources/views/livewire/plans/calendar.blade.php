<div>
    <div class="flex items-center justify-center h-screen">
        <div class="bg-gray-200 p-6 rounded-lg shadow-lg"> <!-- Este es el div centrado -->
            <livewire:appointments-calendar
            week-starts-at="0"
            :key="now()->timestamp"
            :initialYear="$currentYear"
            :initialMonth="$currentMonth"
            :drag-and-drop-enabled="true" />
        </div>
    </div>

    <button wire:click="goToPreviousMonth" class="btn btn-primary">Mes Anterior {{ $idPlan}}</button>
    <button wire:click="goToCurrentMonth" class="btn btn-secondary">Mes Actual</button>
    <button wire:click="goToNextMonth" class="btn btn-primary">Mes Siguiente</button>

</div>
