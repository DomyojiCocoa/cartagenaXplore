<?php

namespace App\Livewire\Temperature;

use GuzzleHttp\Client;
use Livewire\Component;

class TemperatureMain extends Component
{
    public $temperature;

    public function mount() {
        $apiKey = 'c75fdf7c5e7cd7eb463edaac441ed452';
        $city = 'Cartagena,CO';

        $apiUrl = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey&units=metric";
        // $apiUrl = "localhost:8001/api/v1/weather";
        $client = new Client();

        $response = $client->get($apiUrl);

        $data = json_decode($response->getBody(), true);

        $this->temperature = $data['main']['temp'];

    }
    public function render()
    {
        return view('livewire.temperature.temperature-main');
    }
}
