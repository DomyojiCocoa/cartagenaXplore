<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
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

            $now = \Carbon\Carbon::now('America/Bogota');

            $this->forecasts = collect($data['list'])
                ->map(function ($item) {
                    return [
                        'time' => \Carbon\Carbon::parse($item['dt_txt'])->setTimezone('America/Bogota'),
                        'temp' => $item['main']['temp'],
                        'description' => $item['weather'][0]['description'],
                        'icon' => $item['weather'][0]['icon'],
                    ];
                })
                ->filter(function ($item) use ($now) {
                    return $item['time']->isToday() && $item['time']->isFuture();
                })
                ->sortBy('time')
                ->take(8)
                ->values();

        } else {
            $this->forecasts = [];
        }
    }


    public function render()
    {
        return view('livewire.weather-forecast');
    }
}
