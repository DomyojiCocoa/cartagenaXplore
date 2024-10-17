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
        $url = "https://api.openweathermap.org/data/2.5/forecast?q={$city}&appid={$apiKey}&units=metric&lang=es"; // Agregamos el parámetro &lang=es
    
        $response = Http::withoutVerifying()->get($url);
    
        
        if ($response->successful()) {
            $data = $response->json();
            
            // Obtener la fecha y hora actual en Bogotá
            $now = \Carbon\Carbon::now('America/Bogota');
    
            // Filtrar pronósticos para la fecha actual y horas no pasadas
            $this->forecasts = collect($data['list'])
                ->map(function ($item) {
                    return [
                        'time' => \Carbon\Carbon::parse($item['dt_txt'])->setTimezone('America/Bogota'),
                        'temp' => $item['main']['temp'],
                        'description' => $item['weather'][0]['description'], // Las descripciones ahora estarán en español
                        'icon' => $item['weather'][0]['icon'],
                    ];
                })
                ->filter(function ($item) use ($now) {
                    return $item['time']->isToday() && $item['time']->isFuture();
                })
                ->sortBy('time') // Ordenar los pronósticos por hora
                ->take(8) // Obtener solo los primeros 8 pronósticos
                ->values(); // Reindexar el array
    
        } else {
            // Manejo de error en caso de que la API falle
            $this->forecasts = [];
        }
    }
    
    
    

    // public function fetchWeatherData()
    // {
    //     $apiKey = 'c75fdf7c5e7cd7eb463edaac441ed452';
    //     $city = 'Cartagena';
    //     $url = "https://api.openweathermap.org/data/2.5/forecast?q={$city}&appid={$apiKey}&units=metric";

    //     $response = Http::withoutVerifying()->get($url);

    //     if ($response->successful()) {
    //         $data = $response->json();
    //         // Filtrar pronósticos para intervalos de 3 horas
    //         $this->forecasts = collect($data['list'])->map(function ($item) {
    //             return [
    //                 'time' => $item['dt_txt'],
    //                 'temp' => $item['main']['temp'],
    //                 'description' => $item['weather'][0]['description'],
    //                 'icon' => $item['weather'][0]['icon'],
    //             ];
    //         });
    //     } else {
    //         // Manejo de error en caso de que la API falle
    //         $this->forecasts = [];
    //     }
    // }
    public function render()
    {
        return view('livewire.weather-forecast');
    }
}
