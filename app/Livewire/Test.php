<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $events = [];
    
    public function mount() {
        $this->events = $this->getEvents();
    }

    public function getEvents()
    {
        return [
            ['title' => 'Evento 1', 'start' => '2024-10-25'],
            ['title' => 'Evento 2', 'start' => '2024-10-26'],
        ];
    }

    public function addEvent($eventData)
    {
        // Guardar el evento en la base de datos
        // Ejemplo simple de agregar un evento
        $this->events[] = [
            'title' => $eventData['title'],
            'start' => $eventData['start'],
        ];

        // Puedes hacer lógica adicional para almacenar en BD, luego
        $this->dispatchBrowserEvent('event-added', ['events' => $this->events]);
    }
    public function render()
    {
        return view('livewire.test');
    }
}
