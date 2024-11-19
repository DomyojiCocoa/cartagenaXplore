<div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($plansDefault as $default)
            @auth
                <a href="{{ route('planBuilding', $default->id) }}" wire:click="prueba({{ $default->id }})"
                    class="w-full max-w-sm h-auto rounded-lg shadow-lg overflow-hidden group block">
                    <div class="overflow-hidden">
                        <img src="{{ asset($default->url_img) }}"
                            class="w-full h-80 object-cover rounded-lg transform transition duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-4">
                        <h3 class="text-2xl md:text-3xl pb-3 font-bold">{{ $default->name }}</h3>
                        <div class="flex justify-center md:justify-evenly">
                            <p class="text-gray-500 text-lg md:text-xl">Ver plan completo</p>
                        </div>
                    </div>
                </a>
            @else
            <a href="{{ route('login') }}"
                class="w-full max-w-sm h-auto rounded-lg shadow-lg overflow-hidden group block">
                <div class="overflow-hidden">
                    <img src="{{ asset($default->url_img) }}"
                        class="w-full h-80 object-cover rounded-lg transform transition duration-500 group-hover:scale-110">
                </div>
                <div class="p-4">
                    <h3 class="text-2xl md:text-3xl pb-3 font-bold">{{ $default->name }}</h3>
                    <div class="flex justify-center md:justify-evenly">
                        <p class="text-gray-500 text-lg md:text-xl">Ver plan completo</p>
                    </div>
                </div>
            </a>
            @endauth
        @endforeach
        <a href="{{ route('planBuilding', $planCount) }}" wire:click="prueba({{ $planCount }})"
            class="w-full max-w-sm h-auto rounded-lg shadow-lg overflow-hidden group block">
            <div class="overflow-hidden">
                <img src="{{ asset('img/addplan.png') }}"
                    class="w-full h-80 object-cover rounded-lg transform transition duration-500 group-hover:scale-110">
            </div>
            <div class="p-4">
                <h3 class="text-2xl md:text-3xl pb-3 font-bold">Crea tu propio plan</h3>
            </div>
        </a>
    </div>
</div>

{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

{{-- <div class="overflow-hidden">
        <img src="{{ asset($default->url_img)}}"
            class="w-full h-80 object-cover rounded-lg transform transition duration-500 group-hover:scale-110">
    </div>
    <div class="p-4">
        <h3 class="text-3xl pb-3 font-bold">{{$default->name}}</h3>
        <h3 class="text-3xl pb-3 font-bold">{{$default->category->name}}</h3>
    </div> --}}
