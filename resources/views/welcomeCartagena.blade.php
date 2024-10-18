<x-guest-layout>
    <div class="font-satoshi z-50">
        @livewire('navigation-menu')
    </div>

    <div class="bg-body-bg4 bg-cover bg-center w-full h-screen flex justify-center items-center relative text-right">
        <div class="flex flex-col md:flex-row justify-between items-center w-full max-w-7xl z-10 px-8" style="gap: 25%">
            <!-- Contenedor del logo -->
            <div>
                <livewire:temperature.temperature-main />

            </div>

            <!-- Contenedor del texto -->
            <div class=" md:text-left mt-10 md:mt-0">
                <h1 class="text-white text-5xl md:text-7xl font-extrabold leading-tight">Encuentra el destino<br>perfecto</h1>
                <h2 class="text-white text-lg md:text-xl mt-3 md:mt-5 font-normal">Conoce Cartagena de manera única con nuestros<br>servicios personalizados</h2>
                <div class="mt-6">
                    <a href="{{ route('services') }}" wire:navigate  class="w-48 bg-orange-500 hover:bg-orange-400 curosr-pointer text-white py-3 px-6 rounded-full font-semibold text-center shadow-lg transition duration-300">
                        Explora ahora
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="m-5 md:m-20">
        <livewire:weather-forecast />
        <div class="mt-20">
            <div class="flex justify-between items-center pb-10">
                <h1 class="text-3xl md:text-4xl font-semibold mb-7">Actividades de hoy</h1>
                <div class="w-60 h-10 text-sm border border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white rounded-3xl text-center shadow-md flex items-center justify-center">
                    <a href="{{ route('services') }}">Acceder a más servicios</a>
                </div>
            </div>

            <div class="flex justify-center space-x-6 p-6">
                <livewire:welcome.activites-carrousel />
            </div>
        </div>


        <div class="mt-20">
            <div class="flex justify-between items-center pb-10">
                <h1 class="text-3xl md:text-4xl font-semibold mb-7">Eventos especiales</h1>
                <div class="w-60 h-10 text-sm border border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white rounded-3xl text-center shadow-md flex items-center justify-center">
                    <a href="{{ route('services') }}">Acceder a más servicios</a>
                </div>
            </div>

            <div class="flex justify-center space-x-6 p-6">
                <livewire:welcome.activites-carrousel />
            </div>
        </div>


        <div class="mt-20">
            <h1 class="text-3xl md:text-4xl font-normal mb-10">Experiencia de nuestros clientes</h1>
            <div class="mb-4">
                <textarea placeholder="¿Qué tal te fue?" class="w-full h-28 p-4 border border-gray-500 rounded-3xl"></textarea>
            </div>
            <div class="flex justify-center">
                <button class="bg-orange-500 hover:bg-[#c9773e] text-white py-2 px-8 rounded-3xl font-semibold shadow-md">Enviar</button>
            </div>
        </div>


        <div class="mt-20 p-5 border-b border-gray-300 pb-4">
            <div class="flex items-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="#666666"><path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/></svg>
                <div>
                    <h1 class="text-xl font-semibold">Nombre de usuario</h1>
                    <p class="text-sm text-orange-500">20 de enero de 2024</p>
                </div>
            </div>
            <p class="text-gray-600">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto...</p>
        </div>

        <div class="flex justify-center mt-10">
            <button class="border border-orange-500 text-orange-500 py-2 px-8 rounded-3xl hover:bg-orange-500 hover:text-white shadow-md">Ver más opciones</button>
        </div>
    </div>


    <div class="bg-body-bg3 bg-cover bg-center w-full h-[420px]">
        <div class="p-20">
            <h1 class="text-white text-5xl md:text-7xl font-medium">Fascinante</h1>
            <h2 class="text-white text-xl md:text-2xl pt-5">Ideal para expresar el interés que despiertan sus sitios históricos</h2>
        </div>
    </div>

    <div class="bg-zinc-950 w-full h-20 flex justify-start items-end">
        <p class="text-white">2024 CartagenaXplore. Todos los derechos reservados.</p>
    </div>


    <button id="scrollTopButton" class="fixed bottom-4 right-4 hidden p-3 bg-orange-600 text-white rounded-full shadow-md hover:bg-orange-700">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
        </svg>
    </button>

    <script>
        const scrollTopButton = document.getElementById('scrollTopButton');
        window.onscroll = function() {
            if (window.scrollY > 100) {
                scrollTopButton.classList.remove('hidden');
            } else {
                scrollTopButton.classList.add('hidden');
            }
        };
        scrollTopButton.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</x-guest-layout>
