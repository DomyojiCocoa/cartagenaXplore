<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class WeatherForecast extends Component
{
    public $forecasts = [];

    public function mount()
    {
        $this->fetchWeatherData();
    }

    public function fetchWeatherData()
    {
        $apiKey = 'c75fdf7c5e7cd7eb463edaac441ed452';
        $city = 'Cartagena';
        $url = "https://api.openweathermap.org/data/2.5/forecast?q={$city}&appid={$apiKey}&units=metric";

        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();
            // Filtrar pronósticos para intervalos de 3 horas
            $this->forecasts = collect($data['list'])->map(function ($item) {
                return [
                    'time' => $item['dt_txt'],
                    'temp' => $item['main']['temp'],
                    'description' => $item['weather'][0]['description'],
                    'icon' => $item['weather'][0]['icon'],
                ];
            });
        } else {
            // Manejo de error en caso de que la API falle
            $this->forecasts = [];
        }
    }
    public function render()
    {
        return view('livewire.weather-forecast');
    }
}
