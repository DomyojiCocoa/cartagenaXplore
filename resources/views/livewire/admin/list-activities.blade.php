<div class="w-full">

    <div class="p-8">
        <div class="flex items-center justify-end space-x-2 pb-10">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#CCCCCC">
                <path
                    d="M160-200v-80h80v-280q0-83 50-147.5T420-792v-28q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820v28q80 20 130 84.5T720-560v280h80v80H160Zm320-300Zm0 420q-33 0-56.5-23.5T400-160h160q0 33-23.5 56.5T480-80ZM320-280h320v-280q0-66-47-113t-113-47q-66 0-113 47t-47 113v280Z" />
            </svg>
            <div>
                <h1 class="text-gray-700 text-lg">admin@gmail.com</h1>
                <div class="flex justify-end">
                    <button class="text-orange-300 text-sm">Cerrar sesión</button>
                </div>
            </div>
        </div>

        <!-- Título de la Página -->
        <div class="flex justify-between items-center mb-5">
            <h1 class="text-3xl font-bold">Actividad</h1>
            <h3>6 Actividad</h3>
        </div>
        <hr class="border-t-1 border-black my-4">

        <!-- Barra de Búsqueda y Botones -->
        <div class="flex justify-between items-center mb-4">
            <!-- Búsqueda de Usuarios -->
            <div class="flex items-center">
                <input type="text" placeholder="Nombre o palabra clave" class="border rounded p-2 mr-4">
                <label class="flex items-center pl-10">
                    Seleccionar actividad
                    <input type="checkbox" class="ml-5">
                </label>
            </div>

            <!-- Botones de Acción -->
            <div class="flex items-center">
                <div class="pl-14">
                    <button class="bg-orange-500 text-white px-4 py-2 rounded-xl ">Añadir actividad</button>

                </div>
                <div class="pl-14">
                    <button class="border border-slate-600 text-gray-500 px-4 py-2 rounded-xl mr-2">Eliminar
                        actividad</button>

                </div>
                <!-- Botón con Icono -->
                <button class="pl-20">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#666666">
                        <path
                            d="M440-120v-240h80v80h320v80H520v80h-80Zm-320-80v-80h240v80H120Zm160-160v-80H120v-80h160v-80h80v240h-80Zm160-80v-80h400v80H440Zm160-160v-240h80v80h160v80H680v80h-80Zm-480-80v-80h400v80H120Z" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Tabla de Usuarios -->
        <div class="bg-white shadow rounded-lg overflow-hidden w-full ">
            <div x-data="{ showModal: false, actividadDetalle: null }">
                <table class="min-w-full w-full border-collapse border border-slate-300">
                    <!-- Encabezado de la Tabla -->
                    <thead class="bg-slate-900 text-white">
                        <tr>
                            <th class="p-4 text-left border-b border-slate-300">Actividad</th>
                            <th class="p-4 text-left border-b border-slate-300">Estado</th>
                            <th class="p-4 text-left border-b border-slate-300">Detalles</th>
                        </tr>
                    </thead>
                    <!-- Cuerpo de la Tabla -->
                    <tbody>
                        @foreach ($actividades as $actividad)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="p-4 flex items-center">
                                    <input type="checkbox" class="mr-2">{{ $actividad->title }}
                                </td>
                                <td class="p-4">
                                    @if ($actividad->trashed())
                                        <span
                                            class="text-red-500 border border-red-500 font-semibold px-2 py-1 rounded-lg">
                                            Eliminado
                                        </span>
                                    @else
                                        <span
                                            class="text-green-500 border border-green-500 font-semibold px-2 py-1 rounded-lg">
                                            Activo
                                        </span>
                                    @endif
                                </td>
                                <td class="p-4">
                                    <button
                                        class="text-slate-700 border border-slate-600 px-4 py-1 rounded-xl hover:bg-slate-100 transition"
                                        wire:click="mostrarActividad({{ $actividad->id }})">
                                        Ver
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Modal -->
                <div x-data="{ showModal: @entangle('mostrarModal') }" x-show="showModal"
                    class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center" x-cloak>
                    <div class="bg-white w-1/3 rounded-lg shadow-lg p-6">
                        <h2 class="text-xl font-bold mb-4">Detalles de la Actividad</h2>
                        <p class="text-gray-700 mb-2">{{ $actividadDetalle->title ?? 'N/A' }}
                        </p>
                        <p class="text-gray-700 mb-2">
                            {{ $actividadDetalle->description ?? 'N/A' }}</p>
                        <p class="text-gray-700 mb-6">{{ $actividadDetalle->price ?? 'N/A' }}
                        </p>
                        <div class="flex justify-end">
                            <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition"
                                @click="$wire.set('mostrarModal', false)">
                                Cerrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paginación -->
        <div class="flex justify-center items-center mt-4">
            <div class="p-4 bg-white border-t">

            </div>
        </div>
    </div>
    
</div>
