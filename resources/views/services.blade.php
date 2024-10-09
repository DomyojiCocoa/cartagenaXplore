<x-app-layout>
    <div class="flex pt-16 bg-white px-28 ">
        <!-- Barra lateral izquierda -->
        <div class="bg-gray-100	w-72 rounded-xl">

            <h2 class="text-2xl text-center font-bold mb-4">Tipos de servicios</h2>
            <ul>
                <li class="mb-2">
                    <ul class="ml-8 list-disc marker-orange">
                        <li class="text-black font-semibold"> Actividades para hoy</li>
                    </ul>
                    <ul class="ml-4 mt-2">
                        <li class="mb-2 cursor-pointer hover:bg-gray-200 p-2 rounded-xl">
                            Todas las actividades
                        </li>
                        <li class="mb-2 cursor-pointer hover:bg-gray-200 p-2 rounded-xl">
                            Lugar 1
                        </li>
                        <li class="mb-2 cursor-pointer hover:bg-gray-200 p-2 rounded-xl">
                            Lugar 2
                        </li>
                        <li class="mb-2 cursor-pointer hover:bg-gray-200 p-2 rounded-xl">
                            Lugar 3
                        </li>
                        <li class="mb-2 cursor-pointer hover:bg-gray-200 p-2 rounded-xl">
                            Lugar 4
                        </li>
                    </ul>
                </li>
                <ul class="ml-8 list-disc marker-zinc" >
                    <li class="mt-6">
                        Eventos especiales
                    </li>

                </ul>
            </ul>
        </div>
        <div>
            <livewire:service.all-activities />

        </div>
        <!-- Contenido de la derecha -->
        <div class="w-3/4 p-4 ml-2 border-l border-black">
            <!-- Barra de búsqueda y filtro -->
            <div class="flex justify-between items-center mb-4">
                <div class="relative w-64 h-	">
                    <input type="text" placeholder="Nombre o palabra clave"
                        class="border border-gray-300 p-2 pl-10 rounded-2xl w-full" />
                    <!-- Ícono de la lupa -->
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#666666" class="absolute left-2 top-2 pointer-events-none">
                        <path
                            d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                    </svg>
                </div>
                <h2>10 resultados</h2>
                <select class="border-0 ring-white">
                    <option>Ordenar clima por: Climas variados</option>
                    <!-- Más opciones -->
                </select>
            </div>


            <div class="grid grid-cols-3 gap-4 ">
                <div class="w-full bg-zinc-700 border border-gray-200 rounded-lg shadow-lg relative group">
                    <!-- Imagen -->
                    <div class="h-40 flex items-center justify-center bg-gray-100 rounded-t-lg">
                        <span class="text-gray-400">Imagen</span>
                    </div>
                    <!-- Título y estrellas -->
                    <div class="flex items-center justify-between ">
                        <h3 class="text-base font-bold text-white">Título de la actividad</h3>
                        <div class="flex items-center">
                            <!-- Estrellas -->
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Contenido que aparece en hover -->
                    <div class="p-4 opacity-0 transform translate-y-4 transition-all duration-300 ease-in-out group-hover:opacity-100 group-hover:translate-y-0 absolute top-16 w-full bg-zinc-700  z-10 rounded-2xl">
                        <div class="flex">
                            <h3 class="text-sm font-bold text-white">Título de la actividad</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                        </div>
                        <div class="flex">
                            <p class="text-sm text-white mb-4">Lorem ipsum es simplemente el texto de relleno de las imprentas.</p>
                            <div>
                                <h1 class="pl-4 text-white">0.0</h1>
                                <h6 class="text-[7px] text-white">(20 reseñas) </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full bg-zinc-700 border border-gray-200 rounded-lg shadow-lg relative group">
                    <!-- Imagen -->
                    <div class="h-40 flex items-center justify-center bg-gray-100 rounded-t-lg">
                        <span class="text-gray-400">Imagen</span>
                    </div>
                    <!-- Título y estrellas -->
                    <div class="flex items-center justify-between ">
                        <h3 class="text-base font-bold text-white">Título de la actividad</h3>
                        <div class="flex items-center">
                            <!-- Estrellas -->
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Contenido que aparece en hover -->
                    <div class="p-4 opacity-0 transform translate-y-4 transition-all duration-300 ease-in-out group-hover:opacity-100 group-hover:translate-y-0 absolute top-16 w-full bg-zinc-700  z-10 rounded-2xl">
                        <div class="flex">
                            <h3 class="text-sm font-bold text-white">Título de la actividad</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                        </div>
                        <div class="flex">
                            <p class="text-sm text-white mb-4">Lorem ipsum es simplemente el texto de relleno de las imprentas.</p>
                            <div>
                                <h1 class="pl-4 text-white">0.0</h1>
                                <h6 class="text-[7px] text-white">(20 reseñas) </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full bg-zinc-700 border border-gray-200 rounded-lg shadow-lg relative group">
                    <!-- Imagen -->
                    <div class="h-40 flex items-center justify-center bg-gray-100 rounded-t-lg">
                        <span class="text-gray-400">Imagen</span>
                    </div>
                    <!-- Título y estrellas -->
                    <div class="flex items-center justify-between ">
                        <h3 class="text-base font-bold text-white">Título de la actividad</h3>
                        <div class="flex items-center">
                            <!-- Estrellas -->
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Contenido que aparece en hover -->
                    <div class="p-4 opacity-0 transform translate-y-4 transition-all duration-300 ease-in-out group-hover:opacity-100 group-hover:translate-y-0 absolute top-16 w-full bg-zinc-700  z-10 rounded-2xl">
                        <div class="flex">
                            <h3 class="text-sm font-bold text-white">Título de la actividad</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#FFFF55">
                                <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                            </svg>
                        </div>
                        <div class="flex">
                            <p class="text-sm text-white mb-4">Lorem ipsum es simplemente el texto de relleno de las imprentas.</p>
                            <div>
                                <h1 class="pl-4 text-white">0.0</h1>
                                <h6 class="text-[7px] text-white">(20 reseñas) </h6>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            <!-- Paginación -->
            <div class="flex justify-center mt-4">
                <button class="px-3 py-1 border rounded-l-lg bg-gray-100">Anterior</button>
                <button class="px-3 py-1 border-t border-b bg-white">1</button>
                <button class="px-3 py-1 border-t border-b bg-white">2</button>
                <button class="px-3 py-1 border rounded-r-lg bg-gray-100">Siguiente</button>
            </div>
        </div>
    </div>
</x-app-layout>
