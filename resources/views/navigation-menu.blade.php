<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 fixed w-screen">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                @if (Route::has('login'))
                    @auth
                    <div class="flex justify-evenly py-8 sticky top-0 bg-white z-50">
                        <div class="flex justify-evenly w-52">
                            <div class="bg-black rounded-full flex w-10 h-10 justify-center items-center ">
                                <span class="text-white text-xs font-bold">Logo</span>
                            </div>
                            <h2 class="text-lg font-bold text-center text-orange-500 ">CartagenaXplore</h2>
                        </div>
                        <div class="justify-between flex">
                            <a href="/" wire:navigate class="pr-4  hover:text-orange-500 relative group">Inicio
                                <span class="block h-0.5 bg-orange-500 absolute bottom-0 left-0 w-0 group-hover:w-10 transition-all duration-300"></span>
                            </a>
                            <a href="{{ route('services')}}"  wire:navigate class="pr-4  hover:text-orange-500 relative group">Servicios
                                <span class="block h-0.5 bg-orange-500 absolute bottom-0 left-0 w-0 group-hover:w-20 transition-all duration-300"></span>
                            </a>
                            <a href="/" wire:navigate class=" hover:text-orange-500 relative group">Contactanos
                                <span class="block h-0.5 bg-orange-500 absolute bottom-0 left-0 w-0 group-hover:w-full transition-all duration-300"></span>
                            </a>
                        </div>

                        @role('Administrator')
                        <div class="flex">
                            <a href="/" wire:navigate class=" hover:text-orange-500 relative group">Usuarios
                                <span class="block h-0.5 bg-orange-500 absolute bottom-0 left-0 w-0 group-hover:w-full transition-all duration-300"></span>
                            </a>
                            <a href="/" wire:navigate class=" hover:text-orange-500 relative group">Sitios
                                <span class="block h-0.5 bg-orange-500 absolute bottom-0 left-0 w-0 group-hover:w-full transition-all duration-300"></span>
                            </a>
                        </div>
                        @endrole
                    </div>
                    @else
                        <div class="flex justify-evenly py-8 sticky top-0 bg-white z-50">
                            <div class="flex justify-evenly w-52">
                                <div class="bg-black rounded-full flex w-10 h-10 justify-center items-center ">
                                    <span class="text-white text-xs font-bold">Logo</span>
                                </div>
                                <h2 class="text-lg font-bold text-center text-orange-500 ">CartagenaXplore</h2>
                            </div>
                            <div class="justify-between flex">
                                <a href="/" wire:navigate class="pr-4  hover:text-orange-500 relative group">Inicio
                                    <span class="block h-0.5 bg-orange-500 absolute bottom-0 left-0 w-0 group-hover:w-10 transition-all duration-300"></span>
                                </a>
                                <a href="{{ route('services')}}"  wire:navigate class="pr-4  hover:text-orange-500 relative group">Servicios
                                    <span class="block h-0.5 bg-orange-500 absolute bottom-0 left-0 w-0 group-hover:w-20 transition-all duration-300"></span>
                                </a>
                                <a href="/" wire:navigate class=" hover:text-orange-500 relative group">Contactanos
                                    <span class="block h-0.5 bg-orange-500 absolute bottom-0 left-0 w-0 group-hover:w-full transition-all duration-300"></span>
                                </a>
                            </div>
                        </div>
                        <div class="flex">
                            <a href="{{ route('login') }}"
                                class="focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 hover:text-orange-500">Inicia Sesion</a>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#666666">
                                <path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
                            </svg>
                        </div>
                    @endauth


                @endif

            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">

                @auth

                <!-- Settings Dropdown -->
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @role('Administrator')
                                <x-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Menu administrador') }}
                                </x-dropdown-link>
                            @endrole

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
            @endauth

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    </div>
</nav>
