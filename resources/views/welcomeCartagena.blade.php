<x-guest-layout>
    <div class="font-satoshi">
        @livewire('navigation-menu')
    </div>
    <div class="bg-body-bg4 bg-cover bg-center w-full h-[550px] flex justify-center items-center">
        <div class="flex justify-between items-center w-full max-w-4xl ">
            <div class="h-40 w-40 bg-black flex flex-col justify-center items-center rounded-full text-white">
                <livewire:temperature.temperature-main/>
                <livewire:temperature.weather-main />
            </div>
            <div class=" justify-evenly items-end h-full text-end pt-10">
                <h1 class="text-white  mb-5 text-6xl font-extrabold ">Encuentra el destino
                    <br>perfecto
                </h1>
                <div class="flex w-full justify-between pr-10 ">
                    <h2 class="text-white text-xl mb-6 font-normal ">Conoce a cartagena de manera unica con nuestros
                        servicios <br>personalizados</h2>

                </div>
                <div class="justify-end mt-4">
                    <button
                        class="w-40 bg-orange-500 hover:bg-orange-300 text-white py-2 rounded-3xl font-semibold text-center shadow-md">Explorar
                        ahora</button>
                </div>
            </div>
        </div>
    </div>
    <div class="m-20">
        <div class="">
            <h1 class="text-4xl font-semibold mb-7">Clima del dia</h1>

        </div>
        <div class="flex justify-between px-28">
            <div class="h-48 w-36 bg-sky-500 flex flex-col justify-center items-center rounded-lg shadow-md">
                <h1 class="text-white text-4xl pb-2">31°</h1>
                <h6 class="text-white text-sm pb-2">Sol Con Nubes</h6>
                <div class="bg-sky-950 px-3 rounded-lg">
                    <h5 class="text-white text-sm">11:00AM</h5>
                </div>
            </div>
            <div class="h-48 w-36 bg-sky-500 flex flex-col justify-center items-center rounded-lg shadow-md">
                <h1 class="text-white text-4xl pb-2">33°</h1>
                <h6 class="text-white text-sm pb-2">Soleado</h6>
                <div class="bg-sky-950 px-3 rounded-lg">
                    <h5 class="text-white text-sm">12:00PM</h5>
                </div>
            </div>
            <div class="h-48 w-36 bg-sky-500 flex flex-col justify-center items-center rounded-lg shadow-md">
                <h1 class="text-white text-4xl pb-2">34°</h1>
                <h6 class="text-white text-sm pb-2">Soleado</h6>
                <div class="bg-sky-950 px-3 rounded-lg">
                    <h5 class="text-white text-sm">1:00PM</h5>
                </div>
            </div>
            <div class="h-48 w-36 bg-sky-500 flex flex-col justify-center items-center rounded-lg shadow-lg">
                <h1 class="text-white text-4xl pb-2">23°</h1>
                <h6 class="text-white text-sm pb-2">Nublado</h6>
                <div class="bg-sky-950 px-3 rounded-lg">
                    <h5 class="text-white text-sm">6:00PM</h5>
                </div>
            </div>
        </div>
        <div class="mt-20">
            <!-- Primer div: Actividades de hoy -->
            <div class="flex justify-between pb-10">
                <h1 class="text-4xl font-semibold mb-7">Actividades de hoy</h1>
                <div class="w-60 h-10 text-sm border border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white rounded-3xl text-center shadow-md items-center pt-2">
                    <a wire:navigate href="{{route('services')}}">Acceder a más servicios</a>
                </div>
                <div class="flex">
                    <div class="border-2 border-black rounded-full h-7">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                            <path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z" />
                        </svg>
                    </div>
                    <div class="border-2 border-black rounded-full h-7">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                            <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex justify-center space-x-6 p-6">
                <livewire:welcome.activites-carrousel/>
            </div>
        </div>

        <div class="mt-20">
            <!-- Segundo div: Eventos especiales -->
            <div class="flex justify-between pb-10">
                <h1 class="text-4xl font-semibold mb-7">Eventos especiales</h1>
                <div class="w-60 h-10 text-sm border border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white rounded-3xl text-center shadow-md items-center pt-2">
                    <a wire:navigate href="{{route('services')}}">Acceder a más servicios</a>
                </div>
                <div class="flex">
                    <div class="border-2 border-black rounded-full h-7">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                            <path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z" />
                        </svg>
                    </div>
                    <div class="border-2 border-black rounded-full h-7">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                            <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex justify-center space-x-6 p-6">
                <livewire:welcome.activites-carrousel/>
            </div>
        </div>

        <div class="mt-20">
            <h1 class="text-4xl font-normal mb-10">Experiencia de nuestros clientes</h1>
            <div>
                <input type="" name="" id="" placeholder="¿Que tal te fue?..."
                    class="w-full h-28 text-start p-9 flex items-start border border-gray-500 rounded-3xl">
            </div>
            <div class="pt-10 flex justify-center">
                <div
                    class="bg-orange-500 hover:bg-[#c9773e] text-white py-2 rounded-3xl font-semibold text-center shadow-md w-36">
                    <button>Enviar</button>
                </div>
            </div>
        </div>
        <div>
            <div class="mt-20 p-5 border-b border-gray-300 pb-4">

                <div class="flex items-center ">
                    <!-- Ícono SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mr-4" viewBox="0 -960 960 960"
                        fill="#434343">
                        <path
                            d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
                    </svg>
                    <!-- Información de Usuario -->
                    <div>
                        <h1 class="text-xl font-semibold">Nombre de usuario</h1>
                        <p class="text-sm text-orange-500">20 de enero de 2024</p>
                    </div>
                </div>
                <!-- Comentario o contenido -->
                <p class="mt-4 text-gray-600">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                    of type and scrambled it to make a type specimen book.
                </p>
            </div>
            <div class="pt-10 flex justify-center">
                <div
                    class=" text-orange-500 py-2 rounded-3xl font-semibold text-center  w-48 border border-orange-500 border border-orange-500 text-orange-500  hover:bg-orange-500 hover:text-white rounded-3xl text-center shadow-md">
                    <button>Ver mas opciones </button>

                </div>
            </div>
        </div>






    </div>
    </div>
    <div class="bg-body-bg3 bg-cover bg-center w-full h-[420px] ">
        <div class="p-20">

            <h1 class="text-white text-7xl font-medium">Fascinante</h1>
            <h2 class="text-white text-2xl pt-5">Ideal para expresar el interes que despiertan sus sitios historicos
            </h2>
        </div>
    </div>
    <div class="bg-zinc-950 bg-cover bg-center w-full h-44 relative">
        <div class="absolute bottom-0 w-full ">
            <h6 class="text-white">2024 CartagenaXplore. Todos los derechos reservados</h6>
        </div>
    </div>


    <button id="scrollTopButton"
        class="fixed bottom-4 right-4 hidden p-3 bg-orange-600 text-white rounded-full shadow-md transition-all duration-300 ease-in-out hover:bg-orange-700 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
        </svg>
    </button>

    </div>
    <script>
        const scrollTopButton = document.getElementById('scrollTopButton');

        window.onscroll = function() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                scrollTopButton.classList.remove('hidden');
                scrollTopButton.classList.add('block');
            } else {
                scrollTopButton.classList.remove('block');
                scrollTopButton.classList.add('hidden');
            }
        };

        scrollTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 500,
                behavior: 'smooth'
            });
        });
    </script>


    {{-- @endif --}}

</x-guest-layout>
