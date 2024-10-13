<x-app-layout>
    <div class="flex flex-col lg:flex-row justify-center items-start pt-6 bg-white min-h-screen lg:px-18 px-4">
        <div class="flex flex-col lg:flex-row w-full pt-16 bg-white lg:px-10 space-y-8 lg:space-y-0 lg:space-x-8">

            <!-- Barra lateral izquierda -->
            <div class="bg-gray-100 rounded-xl w-full lg:w-1/4 p-6 h-full">
                <h2 class="text-xl lg:text-2xl text-center font-bold mb-4">Tipos de servicios</h2>
                <ul>
                    <li class="mb-6">
                        <ul class="ml-4 lg:ml-8 list-disc marker:text-orange-500">
                            <li class="text-black font-semibold">Actividades para hoy</li>
                        </ul>
                        <ul class="ml-2 lg:ml-4 mt-2">
                            <li class="mb-2 cursor-pointer hover:bg-gray-200 p-2 rounded-xl text-sm lg:text-base">
                                Todas las actividades
                            </li>
                            <li class="mb-2 cursor-pointer hover:bg-gray-200 p-2 rounded-xl text-sm lg:text-base">
                                Lugar 1
                            </li>
                            <li class="mb-2 cursor-pointer hover:bg-gray-200 p-2 rounded-xl text-sm lg:text-base">
                                Lugar 2
                            </li>
                            <li class="mb-2 cursor-pointer hover:bg-gray-200 p-2 rounded-xl text-sm lg:text-base">
                                Lugar 3
                            </li>
                            <li class="mb-2 cursor-pointer hover:bg-gray-200 p-2 rounded-xl text-sm lg:text-base">
                                Lugar 4
                            </li>
                        </ul>
                    </li>
                    <li class="ml-4 lg:ml-8 list-disc marker:text-gray-500">
                        <span class="text-black font-semibold">Eventos especiales</span>
                    </li>
                </ul>
            </div>

            
            <div class="bg-white rounded-xl shadow-md p-4 lg:p-5 w-full lg:w-3/4 flex-grow">
                <livewire:service.all-activities />
            </div>
        </div>
    </div>
</x-app-layout>
