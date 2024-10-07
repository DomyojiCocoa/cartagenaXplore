
<x-guest-layout >
    <div class="font-satoshi">
        @if (Route::has('login'))
            <div class="     ">
                @auth
                    {{ Auth::user()->name}}
                @else
                <div class="flex justify-evenly py-8 sticky top-0 bg-white z-50">
                    <div class="flex justify-evenly w-52">
                        <div class="bg-black rounded-full flex w-10 h-10 justify-center items-center ">
                            <span class="text-white text-xs font-bold">Logo</span>
                        </div>
                        <h2 class="text-lg font-bold text-center text-orange-500 ">CartagenaXplore</h2>
                    </div>
                    <div class="justify-between flex">
                        <a href="" class="pr-4  hover:text-orange-500 relative group">Inicio
                            <span class="block h-0.5 bg-orange-500 absolute bottom-0 left-0 w-0 group-hover:w-10 transition-all duration-300"></span>
                        </a>
                        <a href="" class="pr-4  hover:text-orange-500 relative group">Actividades
                            <span class="block h-0.5 bg-orange-500 absolute bottom-0 left-0 w-0 group-hover:w-20 transition-all duration-300"></span>
                        </a>
                        <a href="" class=" hover:text-orange-500 relative group">Contactanos
                            <span class="block h-0.5 bg-orange-500 absolute bottom-0 left-0 w-0 group-hover:w-full transition-all duration-300"></span>
                        </a>
                    </div>

                    <div class="flex">
                        <a href="{{ route('login') }}"
                            class="hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 hover:text-orange-500">Inicia Sesion</a>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#666666">
                            <path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
                        </svg>
                    </div>
                </div>

                @endauth
            </div>
            <div class="bg-body-bg2 bg-cover bg-center w-full h-[420px] flex justify-center items-center">
                <div class="flex justify-between items-center w-full max-w-4xl">
                    <div class="h-48 w-36 bg-sky-500 flex flex-col justify-center items-center rounded-lg ">
                        <h1 class="text-white text-4xl pb-2">32°</h1>
                        <div class="bg-sky-950 px-3 rounded-lg">
                            <h5 class="text-white text-sm">31°-33°</h5>
                        </div>
                    </div>
                    <div class=" justify-evenly items-center h-full text-center">
                        <h1 class="text-white text-2xl pb-7 text-5xl font-semibold">Cartagena de Indias</h1>
                        <div class="flex w-full justify-between ">
                            <h2 class="text-white pr-7 text-xl">Mar, Oct 1</h2>
                            <h2 class="text-white text-xl">Actualización a las 10:22</h2>

                        </div>
                    </div>
                </div>
            </div>
            <div class="m-20">
                <div class="">
                    <h1 class="text-4xl font-normal mb-7	">Clima del dia</h1>

                </div>
                <div class="flex justify-between">
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
                    <h1 class="text-4xl font-normal mb-10">Actividades Para el clima actual</h1>
                    <div class="flex">
                        <div class="max-w-sm mx-auto border border-gray-500 rounded-lg shadow-md  ">
                            <div class="flex ">
                                <!-- Imagen -->
                                <div class="w-2/3 h-60 flex items-center justify-center p-2 border-r border-gray-500 ">
                                    <span class="text-xl font-bold">Imagen</span>
                                </div>

                                <!-- Contenido -->
                                <div class="w-2/3 h-60     ">
                                    <h2 class="text-orange-500 text-lg font-bold mt-3 mb-3 ml-2">Nombre de Actividad</h2>
                                    <p class="text-gray-600 text-xs ml-2">
                                        (Descripción) Lorem ipsum es simplemente el texto de relleno de las imprentas.
                                    </p>
                                    <div>
                                        <div class="flex items-center mb-2 ml-2 mt-3">
                                            <span class="text-sm text-gray-600 ">Duración: 1 hora</span>
                                        </div>
                                        <div class="flex items-center mb-2">
                                            <!-- Estrellas -->
                                            <div class="flex items-center space-x-1 text-yellow-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4">
                                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                                </svg>
                                                <!-- Repetir las estrellas según sea necesario -->
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4">
                                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4">
                                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4">
                                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4">
                                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                                </svg>
                                            </div>
                                            <span class="text-gray-600 text-sm  ">(200 Reseñas)</span>
                                        </div>
                                        <p class="text-gray-800 font-bold ">
                                            Desde 0.00 COL$ <span class="text-sm text-gray-600">por persona</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class="max-w-sm mx-auto border border-gray-500 rounded-lg shadow-md  ">
                        <div class="flex ">
                            <!-- Imagen -->
                            <div class="w-2/3 h-60 flex items-center justify-center p-2 border-r border-gray-500 ">
                                <span class="text-xl font-bold">Imagen</span>
                            </div>

                            <!-- Contenido -->
                            <div class="w-2/3 h-60     ">
                                <h2 class="text-orange-500 text-lg font-bold mt-3 mb-3 ml-2">Nombre de Actividad</h2>
                                <p class="text-gray-600 text-xs ml-2">
                                    (Descripción) Lorem ipsum es simplemente el texto de relleno de las imprentas.
                                </p>
                                <div>
                                    <div class="flex items-center mb-2 ml-2 mt-3">
                                        <span class="text-sm text-gray-600 ">Duración: 1 hora</span>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <!-- Estrellas -->
                                        <div class="flex items-center space-x-1 text-yellow-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4">
                                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                            <!-- Repetir las estrellas según sea necesario -->
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4">
                                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4">
                                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4">
                                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4">
                                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                        </div>
                                        <span class="text-gray-600 text-sm  ">(200 Reseñas)</span>
                                    </div>
                                    <p class="text-gray-800 font-bold ">
                                        Desde 0.00 COL$ <span class="text-sm text-gray-600">por persona</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                    <div class="mt-20">
                        <h1 class="text-4xl font-normal mb-10">Experiencia de nuestros clientes</h1>
                        <div>
                            <input type="" name="" id="" placeholder="¿Que tal te fue?..." class="w-full h-28 text-start p-9 flex items-start border border-gray-500 rounded-3xl">
                        </div>
                        <div class="pt-10 flex justify-center">
                            <div class="bg-orange-500 hover:bg-[#c9773e] text-white py-2 rounded-3xl font-semibold text-center shadow-md w-36">
                                <button>Enviar</button>
                            </div>
                        </div>
                    </div>
                    <div >
                        <div class="mt-20 p-5 border-b border-gray-300 pb-4">

                            <div class="flex items-center ">
                                <!-- Ícono SVG -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mr-4" viewBox="0 -960 960 960" fill="#434343">
                                    <path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/>
                                </svg>
                                <!-- Información de Usuario -->
                                <div>
                                    <h1 class="text-xl font-semibold">Nombre de usuario</h1>
                                    <p class="text-sm text-orange-500">20 de enero de 2024</p>
                                </div>
                            </div>
                            <!-- Comentario o contenido -->
                            <p class="mt-4 text-gray-600">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                        <div class="pt-10 flex justify-center">
                            <div class=" text-orange-500 py-2 rounded-3xl font-semibold text-center  w-48 border border-orange-500">
                                <button>Ver mas opciones </button>

                            </div>
                        </div>
                    </div>






            </div>
        </div>
        <div class="bg-body-bg3 bg-cover bg-center w-full h-[420px] ">
            <div class="p-20">

                <h1 class="text-white text-7xl font-medium">Fascinante</h1>
                <h2 class="text-white text-2xl pt-5">Ideal para expresar el interes que despiertan sus sitios historicos</h2>
            </div>
        </div>
        <div class="bg-zinc-950 bg-cover bg-center w-full h-44 relative">
            <div class="absolute bottom-0 w-full ">
                <h6 class="text-white">2024 CartagenaXplore. Todos los derechos reservados</h6>
            </div>
        </div>




    </div>


        @endif

</x-guest-layout>
