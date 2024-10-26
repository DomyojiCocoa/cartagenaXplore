<x-guest-layout>
    <div class="font-satoshi z-50">
        @livewire('navigation-menu')
    </div>

    <div class="bg-body-bg4 bg-cover  bg-center w-full min-h-screen flex justify-center items-center ">
        <div class=" absolute bg-opacity-25 bg-black z-2 w-full h-screen">
        </div>

            <!-- Componente del clima, posicionado en la parte inferior izquierda -->
            <div class="pl-96 z-20">
                <livewire:temperature.temperature-main />
            </div>

            <!-- Sección de texto a la derecha -->
            <div class="text-center z-20 md:text-right mt-10 md:mt-0 pl-96">
                <h1 class="text-white z-20 lg:text-8xl font-extrabold">
                    Encuentra el destino<br>perfecto
                </h1>
                <h2 class="text-white z-20 text-2xl md:text-3xl mt-3 md:mt-5 font-normal">
                    Conoce Cartagena de manera única con nuestros<br>servicios personalizados
                </h2>
                <div class="mt-6 z-20">
                    <button class="w-64 z-20 bg-orange-500 hover:bg-orange-400 text-white py-4 px-8 rounded-full font-bold text-center text-xl shadow-lg transition duration-300">
                        Explora ahora
                    </button>
                </div>
            </div>

        </div>
    </div>



    <div class="m-5 md:m-20">
        <livewire:weather-forecast />
        <div class="mt-20">
            <div class="flex justify-between items-center pb-10">
                <h1 class="text-3xl md:text-4xl font-semibold mb-7">Actividades de hoy</h1>
                <div
                    class="w-60 h-10 text-sm border border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white rounded-3xl text-center shadow-md flex items-center justify-center">
                    <a href="{{ route('services') }}">Acceder a más servicios</a>
                </div>
            </div>

            <div class="flex justify-center space-x-6 p-6">
                {{-- <livewire:welcome.activites-carrousel /> --}}
            </div>
        </div>


        <div class="mt-20">
            <div class="flex justify-between items-center pb-10">
                <h1 class="text-3xl md:text-4xl font-semibold mb-7">Eventos especiales</h1>
                <div
                    class="w-60 h-10 text-sm border border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white rounded-3xl text-center shadow-md flex items-center justify-center">
                    <a href="{{ route('services') }}">Acceder a más servicios</a>
                </div>
            </div>

            <div class="flex justify-center space-x-6 p-6">
                {{-- <livewire:welcome.activites-carrousel /> --}}
            </div>
        </div>

        <livewire:welcome.sites-explore />


        <div class="mt-20">
            <livewire:welcome.comments/>
        </div>

    </div>


    <div class="relative w-full h-[60rem] shadow-lg">

        <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover z-0 pointer-events-auto"
            disablePictureInPicture>
            <source src="{{ asset('img/3.mp4') }}" type="video/mp4">
            Tu navegador no soporta la reproducción de videos.
        </video>


        <div class="relative z-10 p-20">
            <div class="flex items-center  h-screen">
                <div class="">
                    <div>
                        <h1 class="text-white lg:text-9xl md:text-7xl font-semibold">Cartagena de Indias</h1>
                    </div>
                    <div>
                        <h2 class="text-white text-3xl lg:text-8xl md:text-4xl pt-8 font-semibold">Encanto colonial</h2>
                    </div>
                    <div>
                        <h3 class="text-white text-xl lg:text-4xl md:text-4xl pt-2 font-normal">
                            Sumérgete en las calles empedradas y coloridas de una ciudad
                        </h3>
                    </div>
                    <div>
                        <h3 class="text-white text-xl lg:text-4xl md:text-4xl pt-2 font-normal">
                            llena de historia y belleza
                        </h3>
                    </div>
                </div>
            </div>

        </div>


    </div>

    <livewire:footer />




    <button id="scrollTopButton"
        class="fixed bottom-4 right-4 hidden p-3 bg-orange-600 text-white rounded-full shadow-md hover:bg-orange-700">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5"
            stroke="currentColor" class="h-6 w-6">
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
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</x-guest-layout>
