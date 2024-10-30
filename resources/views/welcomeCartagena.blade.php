<x-guest-layout>
    <div class="font-satoshi z-50">
        @livewire('navigation-menu')
    </div>

    <div class="bg-body-bg4 bg-cover bg-center w-full min-h-screen flex flex-col justify-center items-center">
        <div class="absolute bg-opacity-25 bg-black z-2 w-full h-screen"></div>

        <div class="pl-4 md:pl-12 lg:pl-20 xl:pl-96 z-20 fixed bottom-4 left-4 md:static">
            <livewire:temperature.temperature-main />
        </div>


        <div class="text-center z-20 md:text-right mt-10 md:mt-0 px-4 md:px-12 lg:px-20 xl:pl-96">
            <h1 class="text-white z-20 text-4xl md:text-6xl lg:text-8xl font-extrabold">
                Emprende la creación<br>de tu viaje
            </h1>
            <h2 class="text-white z-20 text-lg md:text-2xl lg:text-3xl mt-3 md:mt-5 font-normal">
                Conoce Cartagena de manera única con nuestros<br>servicios personalizados
            </h2>
            <div class="mt-6 z-20">
                <button
                    class="w-full md:w-64 bg-orange-500 hover:bg-orange-400 text-white py-4 px-8 rounded-full font-bold text-center text-xl shadow-lg transition duration-300">
                    Explora ahora
                </button>
            </div>
        </div>
    </div>

    <div class="m-5 md:m-10 lg:m-20 px-5 md:px-10 lg:px-20">
        <livewire:weather-forecast />
        <div class="mt-20">
            <div class="flex justify-between items-center pb-10">
                <h1 class="lg:text-6xl md:text-4xl text-3xl font-semibold mb-7">Actividades</h1>
            </div>


            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 p-6">

                <div
                    class="relative w-full sm:w-60 md:w-72 lg:w-80 xl:w-96 h-48 rounded-lg overflow-hidden shadow-lg group">
                    <img src="{{ asset('img/16.jpg') }}" alt="Deportivas"
                        class="w-full h-full object-cover blur-sm transition duration-300 ease-in-out group-hover:blur-none" />
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white font-semibold text-lg">
                        Deportivas
                    </div>
                </div>


                <div
                    class="relative w-full sm:w-60 md:w-72 lg:w-80 xl:w-96 h-48 rounded-lg overflow-hidden shadow-lg group">
                    <img src="{{ asset('img/19.jpg') }}" alt="Culturales"
                        class="w-full h-full object-cover blur-sm transition duration-300 ease-in-out group-hover:blur-none" />
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white font-semibold text-lg">
                        Culturales
                    </div>
                </div>


                <div
                    class="relative w-full sm:w-60 md:w-72 lg:w-80 xl:w-96 h-48 rounded-lg overflow-hidden shadow-lg group">
                    <img src="{{ asset('img/18.jpg') }}" alt="Naturales"
                        class="w-full h-full object-cover blur-sm transition duration-300 ease-in-out group-hover:blur-none" />
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white font-semibold text-lg">
                        Naturales
                    </div>
                </div>


                <div
                    class="relative w-full sm:w-60 md:w-72 lg:w-80 xl:w-96 h-48 rounded-lg overflow-hidden shadow-lg group">
                    <img src="{{ asset('img/17.jpg') }}" alt="Gastronómicos"
                        class="w-full h-full object-cover blur-sm transition duration-300 ease-in-out group-hover:blur-none" />
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white font-semibold text-lg">
                        Gastronómicos
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center mt-6">
                <div
                    class="w-40 md:w-60 h-10 text-sm border border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white rounded-3xl text-center shadow-md flex items-center justify-center">
                    <a href="{{ route('services') }}">Acceder a más servicios</a>
                </div>
            </div>
        </div>



        <div class="mt-20">
            <div class="flex justify-between items-center pb-10">
                <h1 class="text-3xl md:text-4xl lg:text-6xl font-semibold mb-7">Planes diseñados</h1>
            </div>
            <livewire:plans.organize />
        </div>


        <livewire:welcome.sites-explore />


        <div class="mt-20">
            <livewire:welcome.comments />
        </div>
    </div>


    <div class="relative w-full h-[40rem] md:h-[60rem] shadow-lg">
        <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover z-0 pointer-events-auto">
            <source src="{{ asset('img/3.mp4') }}" type="video/mp4">
            Tu navegador no soporta la reproducción de videos.
        </video>

        <div class="relative z-10 p-10 md:p-20">
            <div class="flex items-center h-screen">
                <div>
                    <h1 class="text-white text-5xl md:text-7xl lg:text-9xl font-semibold">Cartagena de Indias</h1>
                    <h2 class="text-white text-2xl md:text-4xl lg:text-8xl pt-4 font-semibold">Encanto colonial</h2>
                    <h3 class="text-white text-lg md:text-xl lg:text-4xl pt-2 font-normal">
                        Sumérgete en las calles empedradas y coloridas de una ciudad llena de historia y belleza
                    </h3>
                </div>
            </div>
        </div>
    </div>


    <livewire:footer />


    <button id="scrollTopButton1"
        class="fixed bottom-4 right-4 hidden p-3 bg-orange-600 text-white rounded-full shadow-md hover:bg-orange-700">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5"
            stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
        </svg>
    </button>

    <script>
        document.addEventListener('livewire:navigated', () => {
            const scrollTopButton = document.getElementById('scrollTopButton1');
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
        })
    </script>
</x-guest-layout>
