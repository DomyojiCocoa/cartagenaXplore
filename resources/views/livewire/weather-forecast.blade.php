<div class="relative w-full">
    <div class="overflow-x-scroll whitespace-no-wrap flex space-x-4">
        @foreach($forecasts as $forecast)

            <div class="inline-block w-1/3 bg-gradient-to-b from-blue-400 to-blue-200 shadow-md rounded-lg p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img src="https://openweathermap.org/img/wn/{{ $forecast['icon'] }}@2x.png" alt="{{ $forecast['description'] }}" class="w-32 h-32">
                </div>
                <p class="text-5xl font-bold text-white mb-2">{{ $forecast['temp'] }}°C</p>
                <p class="text-white text-lg mb-2">{{ ucfirst($forecast['description']) }}</p>
                <p class="bg-blue-700 text-white text-sm px-4 py-1 rounded-full inline-block">{{ \Carbon\Carbon::parse($forecast['time'])->format('g:i A') }}</p>
            </div>

        @endforeach
    </div>
</div>
