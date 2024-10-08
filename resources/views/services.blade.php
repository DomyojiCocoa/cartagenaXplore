<x-app-layout>
    <div class="flex justify-center items-start pt-16 bg-white min-h-screen px-28 overflow-hidden fixed">
        <!-- Barra lateral izquierda -->
        <div class="bg-gray-100 rounded-xl px-5 py-8 shadow-md">
            <h2 class="text-2xl text-center font-bold mb-4">Tipos de servicios</h2>
            <ul>
                <li class="mb-2">
                    <ul class="ml-8 list-disc marker-orange">
                        <li class="text-black font-semibold">Actividades para hoy</li>
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
                <ul class="ml-8 list-disc marker-zinc">
                    <li class="mt-6">Eventos especiales</li>
                </ul>
            </ul>
        </div>

        <div class="bg-white rounded-xl shadow-md p-5 ml-8">
            <livewire:service.all-activities />
        </div>
    </div>
</x-app-layout>
