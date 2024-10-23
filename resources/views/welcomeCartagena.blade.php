<x-guest-layout>
    <div class="font-satoshi z-50">
        @livewire('navigation-menu')
    </div>

    <div class="bg-body-bg4 bg-cover bg-center w-full min-h-screen flex justify-center items-center relative text-right">
        <div class="flex flex-col md:flex-row justify-between items-center w-full max-w-7xl z-10 px-8" style="gap: 25%">
            <div class="flex flex-col justify-center items-center w-full p-4 h-full md:w-80 md:h-80">
                {{-- <div>
                    <img src="{{ asset('img/Cartagena Xplore final-06.png') }}" alt="" class="">
                    <img src="{{ asset('') }}" alt="">
                </div> --}}
                <livewire:temperature.temperature-main />
            </div>

            <div class="text-right md:text-right mt-10 md:mt-0">
                <h1 class="text-white text-5xl md:text-7xl font-extrabold leading-tight">Encuentra el destino<br>perfecto
                </h1>
                <h2 class="text-white text-lg md:text-xl mt-3 md:mt-5 font-normal">Conoce Cartagena de manera única con
                    nuestros<br>servicios personalizados</h2>
                <div class="mt-6">
                    <button
                        class="w-48 bg-orange-500 hover:bg-orange-400 text-white py-3 px-6 rounded-full font-semibold text-center shadow-lg transition duration-300">
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

        <div class="pt-10">
            <h1 class="text-3xl md:text-4xl font-semibold mb-7">Sitios para explorar</h1>


            <div class="grid grid-cols-1 md:grid-cols-5 grid-rows-5 gap-4">


                <div class="md:col-span-3 md:row-span-4">
                    <img src="img/5.jpg" alt="Imagen grande" class="w-full h-full object-cover rounded-lg">
                </div>


                <div class="md:col-span-2 md:row-span-3 md:col-start-4">
                    <img src="img/6.jpg" alt="Imagen pequeña" class="w-full h-full object-cover rounded-lg">
                </div>


                <div class="md:col-span-2 md:row-span-2 md:col-start-4 md:row-start-4 p-4">
                    <h2 class="text-2xl font-bold">CASTILLO DE SAN FELIPE</h2>
                    <p class="mt-2 text-gray-700">
                        El Castillo de San Felipe de Barajas en Cartagena, construido en el siglo XVII, es una atracción
                        turística y símbolo del pasado colonial, con túneles y vistas panorámicas.
                    </p>
                    <div class="pt-4 flex justify-center">
                        <div
                            class="w-60 h-10 text-sm border border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white rounded-3xl text-center shadow-md flex items-center justify-center">
                            <button>Acceder a más servicios</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="mt-20">
            <h1 class="text-3xl md:text-4xl font-normal mb-10">Experiencia de nuestros clientes</h1>
            <div class="mb-4">
                <textarea placeholder="¿Qué tal te fue?" class="w-full h-28 p-4 border border-gray-500 rounded-3xl"></textarea>
            </div>
            <div class="flex justify-center">
                <button
                    class="bg-orange-500 hover:bg-[#c9773e] text-white py-2 px-8 rounded-3xl font-semibold shadow-md">Enviar</button>
            </div>
        </div>


        <div class="mt-20 p-5 border-b border-gray-300 pb-4">
            <div class="flex items-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px"
                    fill="#666666">
                    <path
                        d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
                </svg>
                <div>
                    <h1 class="text-xl font-semibold">Nombre de usuario</h1>
                    <p class="text-sm text-orange-500">20 de enero de 2024</p>
                </div>
            </div>
            <p class="text-gray-600">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de
                texto...</p>
        </div>

        <div class="flex justify-center mt-10">
            <button
                class="border border-orange-500 text-orange-500 py-2 px-8 rounded-3xl hover:bg-orange-500 hover:text-white shadow-md">Ver
                más opciones</button>
        </div>
    </div>


    <div class="relative w-full h-[40rem] shadow-lg">

        <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover z-0 pointer-events-auto"
            disablePictureInPicture>
            <source src="{{ asset('img/3.mp4') }}" type="video/mp4">
            Tu navegador no soporta la reproducción de videos.
        </video>


        <div class="relative z-10 p-20">
            <h1 class="text-white text-5xl md:text-7xl font-semibold	 ">Cartagena de Indias</h1>
            <h2 class="text-white text-3xl md:text-4xl pt-8 font-semibold">Encanto Colonial</h2>
            <h3 class="text-white text-xl pt-2">
                Sumérgete en las calles empedradas y coloridas de una ciudad
            </h3>
            <h3 class="text-white text-xl pt-1">
                llena de historia y belleza
            </h3>
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
