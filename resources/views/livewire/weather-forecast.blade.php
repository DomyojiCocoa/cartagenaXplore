<div class="relative w-full">
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 overflow-x-auto">
        @foreach ($forecasts as $forecast)
            <div class="bg-gradient-to-b from-blue-400 to-blue-200 shadow-md rounded-lg p-6 text-center">
                <div class="flex justify-center mb-4">
                    <img src="https://openweathermap.org/img/wn/{{ $forecast['icon'] }}@2x.png"
                        alt="{{ $forecast['description'] }}" class="w-16 h-16 md:w-24 md:h-24 lg:w-32 lg:h-32">
                </div>
                <p class="text-4xl md:text-3xl font-bold text-white mb-2">{{ $forecast['temp'] }}°C</p>
                <p class="text-white text-sm md:text-lg mb-2">{{ ucfirst($forecast['description']) }}</p>
                <p class="bg-blue-700 text-white text-xs md:text-sm px-4 py-1 rounded-full inline-block">
                    {{ \Carbon\Carbon::parse($forecast['time'])->format('g:i A') }}
                </p>
            </div>
        @endforeach
    </div>
</div>
