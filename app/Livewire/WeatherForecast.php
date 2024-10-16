<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class WeatherForecast extends Component
{
    public $pronosticos = [];
    public $groupedPronosticos = [];
    public $currentGroupIndex = 0;

    public function mount()
    {
        // API URL de OpenWeatherMap
        $url = 'https://api.openweathermap.org/data/2.5/forecast?q=Cartagena,CO&appid=c75fdf7c5e7cd7eb463edaac441ed452&units=metric&lang=es';

        // Realizar la solicitud a la API
        $response = Http::withoutVerifying()->get($url);

        if ($response->successful()) {
            $data = $response->json();
            $tempPronosticos = [];

            // Obtener pronósticos del día actual
            foreach ($data['list'] as $forecast) {
                $dateTime = \Carbon\Carbon::createFromTimestamp($forecast['dt'])->setTimezone('America/Bogota');
                
                // Verificar si el pronóstico es para hoy y limitar a 8 pronósticos
                if ($dateTime->isToday() && count($tempPronosticos) < 8) {
                    $tempPronosticos[] = [
                        'hora' => $dateTime->format('g:i A'), // Formato 1:00 PM
                        'temperatura' => $forecast['main']['temp'],
                        'clima' => $forecast['weather'][0]['description'],
                        'emoji' => $this->getWeatherEmoji($forecast['weather'][0]['id']),
                    ];
                }
            }

            // Agrupar pronósticos en grupos de 4
            $this->groupedPronosticos = array_chunk($tempPronosticos, 4);
            $this->pronosticos = $this->groupedPronosticos[$this->currentGroupIndex] ?? [];
        } else {
            $this->pronosticos = [];
        }
    }

    public function nextGroup()
    {
        if ($this->currentGroupIndex < count($this->groupedPronosticos) - 1) {
            $this->currentGroupIndex++;
            $this->pronosticos = $this->groupedPronosticos[$this->currentGroupIndex];
        }
    }

    public function prevGroup()
    {
        if ($this->currentGroupIndex > 0) {
            $this->currentGroupIndex--;
            $this->pronosticos = $this->groupedPronosticos[$this->currentGroupIndex];
        }
    }

    // Función para obtener emoji según el clima
    private function getWeatherEmoji($weatherId)
    {
        if ($weatherId >= 200 && $weatherId < 300) {
            return '⛈️'; // Tormenta
        } elseif ($weatherId >= 300 && $weatherId < 400) {
            return '🌧️'; // Lluvia
        } elseif ($weatherId >= 500 && $weatherId < 600) {
            return '🌧️'; // Lluvia
        } elseif ($weatherId >= 600 && $weatherId < 700) {
            return '❄️'; // Nieve
        } elseif ($weatherId >= 700 && $weatherId < 800) {
            return '🌫️'; // Niebla
        } elseif ($weatherId == 800) {
            return '☀️'; // Cielo despejado
        } elseif ($weatherId > 800) {
            return '☁️'; // Nublado
        }
        return ''; // Sin emoji
    }

    public function render()
    {
        return view('livewire.weather-forecast');
    }
}
