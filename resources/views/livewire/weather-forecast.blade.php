<div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold mb-4 text-center">Clima del día</h2>

    <div class="relative">
        <div class="flex overflow-hidden">
            <div class="flex transition-transform duration-500" style="transform: translateX(-{{ $currentGroupIndex * 100 }}%);">
                @foreach ($pronosticos as $pronostico)
                    <div class="min-w-[250px] mx-2 p-6 border rounded-lg shadow-lg bg-gradient-to-b from-blue-300 to-blue-500 text-white text-center">
                        <div class="text-4xl mb-2">{{ $pronostico['emoji'] }}</div>
                        <h3 class="text-2xl font-semibold">{{ $pronostico['temperatura'] }}°C</h3>
                        <p class="text-lg">{{ $pronostico['clima'] }}</p>
                        <p class="text-md mt-2">{{ $pronostico['hora'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <button wire:click="prevGroup" class="carousel-button absolute left-0 top-1/2 transform -translate-y-1/2 bg-blue-600 text-white px-4 py-2 rounded-full shadow-md hover:bg-blue-700 transition" {{ $currentGroupIndex === 0 ? 'disabled' : '' }}>
            &lt;
        </button>
        <button wire:click="nextGroup" class="carousel-button absolute right-0 top-1/2 transform -translate-y-1/2 bg-blue-600 text-white px-4 py-2 rounded-full shadow-md hover:bg-blue-700 transition" {{ $currentGroupIndex === count($groupedPronosticos) - 1 ? 'disabled' : '' }}>
            &gt;
        </button>
    </div>

    @if (count($groupedPronosticos) === 0)
        <p class="text-center mt-4">No se encontraron pronósticos para el día de hoy.</p>
    @endif
</div>
