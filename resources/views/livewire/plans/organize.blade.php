<div>
    <x-dialog-modal wire:model="modalPlans">
        <x-slot name="title"></x-slot>
        <x-slot name="content">
            <div class="container mx-auto py-12">
                <h2 class="text-3xl font-bold text-center mb-8">Nuestros Planes</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    @foreach ($plans as $plan)
                        <div
                            class="bg-white rounded-lg shadow-lg overflow-hidden {{ $plan['is_premium'] ? 'border-2 border-orange-500' : '' }}">
                            <div class="px-6 py-8">
                                <h3 class="text-2xl font-semibold text-gray-800">{{ $plan['name'] }}</h3>
                                <p class="mt-2 text-gray-600">{{ $plan['description'] }}</p>
                                <p class="mt-4 text-4xl font-bold text-gray-800">
                                    ${{ number_format($plan['price'], 0, ',', '.') }} COP</p>
                                <ul class="mt-6 space-y-4">
                                    @foreach ($plan['features'] as $feature)
                                        <li class="flex items-start">
                                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="ml-3 text-gray-600">{{ $feature }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="px-6 py-8 bg-gray-50">
                                <button wire:click="mostrarModal4"
                                    class="w-full px-4 py-2 text-white font-semibold bg-orange-500 rounded hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50 transition-colors duration-200">
                                    {{ $plan['cta'] }}
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </x-slot>
        <x-slot name="footer"></x-slot>
    </x-dialog-modal>
    <x-dialog-modal wire:model="modalBuy">
        <x-slot name="title"></x-slot>
        <x-slot name="content">
            <div class="bg-white rounded-lg shadow-lg max-w-md mx-auto p-6">
                <div class="flex justify-center items-center w-14 h-14 bg-green-100 rounded-full mx-auto">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-center text-gray-800 mt-4">
                    ¡Compra realizada con éxito!
                </h3>
                <p class="text-center text-gray-600 text-sm mt-2">
                    Gracias por tu compra. Recibirás un correo electrónico con los detalles de tu pedido.
                </p>
                <div class="mt-6">
                    <button wire:click="ocultarModal4" type="button"
                        class="w-full inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Cerrar
                    </button>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer"></x-slot>
    </x-dialog-modal>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($plansDefault as $default)
            @auth
                @if (Auth::user()->membership == 'free')
                    <button  wire:click="mostrarModal3"
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
                    </button>
                @else
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
                @endif
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
