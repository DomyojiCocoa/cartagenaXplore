<div>
    <div class="text-white text-2xl font-bold mb-8">
        <span>Cartagena</span><span class="text-orange-500">Xplore</span>
    </div>


    <nav class="text-white space-y-4">
        <x-responsive-nav-link href="{{ route('stadistics') }}" wire:navigate
            class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 hover:text-gray-800
                                    {{ request()->routeIs('stadistics') ? 'bg-green text-gray-800  translate-x-2' : 'text-white' }}">
            <span class="inline-flex items-center justify-center h-12 w-12 text-lg ">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    fill="#FFFFFF">
                    <path d="M200-160v-240h120v240H200Zm240 0v-440h120v440H440Zm240 0v-640h120v640H680Z" />
                </svg>
            </span>
            <span class="text-sm font-medium">{{ __('Estadisticas') }}</span>
        </x-responsive-nav-link>
        <x-responsive-nav-link href="{{ route('users') }}" wire:navigate
            class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 hover:text-gray-800
                                    {{ request()->routeIs('users') ? 'bg-green text-gray-800  translate-x-2' : 'text-white' }}">
            <span class="inline-flex items-center justify-center h-12 w-12 text-lg ">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    fill="#FFFFFF">
                    <path
                        d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113ZM120-240h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0 320Zm0-400Z" />
                </svg>
            </span>
            <span class="text-sm font-medium">{{ __('Usuarios') }}</span>
        </x-responsive-nav-link>
        <x-responsive-nav-link href="{{ route('activities') }}" wire:navigate
            class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 hover:text-gray-800
                                    {{ request()->routeIs('activities') ? 'bg-green text-gray-800  translate-x-2' : 'text-white' }}">
            <span class="inline-flex items-center justify-center h-12 w-12 text-lg ">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    fill="#FFFFFF">
                    <path
                        d="M200-120v-680h360l16 80h224v400H520l-16-80H280v280h-80Zm300-440Zm86 160h134v-240H510l-16-80H280v240h290l16 80Z" />
                </svg>
            </span>
            <span class="text-sm font-medium">{{ __('Actividades') }}</span>
        </x-responsive-nav-link>
        <x-responsive-nav-link href="{{ route('events') }}" wire:navigate
            class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 hover:text-gray-800
                                    {{ request()->routeIs('events') ? 'bg-green text-gray-800  translate-x-2' : 'text-white' }}">
            <span class="inline-flex items-center justify-center h-12 w-12 text-lg ">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    fill="#FFFFFF">
                    <path
                        d="M580-240q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Z" />
                </svg>
            </span>
            <span class="text-sm font-medium">{{ __('Eventos') }}</span>
        </x-responsive-nav-link>
        <x-responsive-nav-link href="{{ route('sites') }}" wire:navigate
            class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 hover:text-gray-800
                                    {{ request()->routeIs('sites') ? 'bg-green text-gray-800  translate-x-2' : 'text-white' }}">
            <span class="inline-flex items-center justify-center h-12 w-12 text-lg ">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960 " width="24px"
                    fill="#FFFFFF">
                    <path
                        d="m600-120-240-84-186 72q-20 8-37-4.5T120-170v-560q0-13 7.5-23t20.5-15l212-72 240 84 186-72q20-8 37 4.5t17 33.5v560q0 13-7.5 23T812-192l-212 72Zm-40-98v-468l-160-56v468l160 56Zm80 0 120-40v-474l-120 46v468Zm-440-10 120-46v-468l-120 40v474Zm440-458v468-468Zm-320-56v468-468Z" />
                </svg>
            </span>
            <span class="text-sm font-medium">{{ __('Sitios') }}</span>
        </x-responsive-nav-link>
    </nav>
    <div class="mt-auto text-white pt-24">
        <form method="POST" action="{{ route('logout') }}" x-data wire:navigate>
            @csrf
            <div class="flex items-center py-2 px-2 rounded-lg ">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    fill="#FFFFFF">
                    <path
                        d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z" />
                </svg>


                <x-dropdown-link href="#" wire:navigate
                    @click.prevent="$root.submit();">
                    {{ __('Cerrar sesión') }}
                </x-dropdown-link>
            </div>
        </form>
    </div>
</div>
