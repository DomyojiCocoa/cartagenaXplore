<x-app-layout>
    <div class="flex flex-col lg:flex-row justify-center items-center pt-6 bg-white min-h-screen lg:px-18 px-10">
        <div class="flex flex-col lg:flex-row w-full pt-16 bg-white lg:px-10 space-y-8 lg:space-y-0 lg:space-x-8">

            <!-- Barra lateral izquierda -->
            <div class="bg-gray-200 rounded-xl w-full lg:w-1/4 p-8 h-full"> <!-- Cambié el ancho a 1/4 -->
                <h2 class="text-3xl lg:text-3xl text-center font-bold mb-6">Tipos de servicios</h2> <!-- Aumenté el tamaño del texto a 3xl y 4xl -->
                <ul>
                    <li class="mb-8">
                        <ul class="ml-6 lg:ml-10 list-disc marker:text-orange-500">
                            <li class="text-black font-semibold text-xl lg:text-2xl">Actividades para hoy</li> <!-- Aumenté el tamaño del texto a xl y 2xl -->
                        </ul>
                        <ul class="ml-4 lg:ml-6 mt-4">
                            <li class="mb-4 cursor-pointer hover:bg-gray-100 p-3 rounded-xl text-lg lg:text-xl"> <!-- Aumenté el tamaño del texto a lg y xl -->
                                Todas las actividades
                            </li>
                            <li class="mb-4 cursor-pointer hover:bg-gray-100 p-3 rounded-xl text-lg lg:text-xl"> <!-- Aumenté el tamaño del texto a lg y xl -->
                                Lugar 1
                            </li>
                            <li class="mb-4 cursor-pointer hover:bg-gray-100 p-3 rounded-xl text-lg lg:text-xl"> <!-- Aumenté el tamaño del texto a lg y xl -->
                                Lugar 2
                            </li>
                            <li class="mb-4 cursor-pointer hover:bg-gray-100 p-3 rounded-xl text-lg lg:text-xl"> <!-- Aumenté el tamaño del texto a lg y xl -->
                                Lugar 3
                            </li>
                            <li class="mb-4 cursor-pointer hover:bg-gray-100 p-3 rounded-xl text-lg lg:text-xl"> <!-- Aumenté el tamaño del texto a lg y xl -->
                                Lugar 4
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Contenido principal -->
            <div class="bg-white rounded-xl p-4 lg:p-5 w-full flex-grow">
                <livewire:service.all-activities />
            </div>
        </div>
    </div>


</x-app-layout>
