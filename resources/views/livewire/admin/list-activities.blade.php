<div class="w-full">
    <div class="p-8">
        <livewire:simple-modal />
        <!-- Header -->
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
            <!-- Búsqueda -->
            <div class="flex items-center">
                <input type="text" placeholder="Nombre o palabra clave" class="border rounded p-2 mr-4">
                <label class="flex items-center pl-10">
                    Seleccionar actividad
                    <input type="checkbox" class="ml-5">
                </label>
            </div>

            <!-- Botones de Acción -->
            <div class="flex items-center space-x-4">
                <button class="bg-orange-500 text-white px-4 py-2 rounded-xl">Añadir actividad</button>
                <button class="border border-slate-600 text-gray-500 px-4 py-2 rounded-xl">Eliminar actividad</button>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#666666">
                        <path
                            d="M440-120v-240h80v80h320v80H520v80h-80Zm-320-80v-80h240v80H120Zm160-160v-80H120v-80h160v-80h80v240h-80Zm160-80v-80h400v80H440Zm160-160v-240h80v80h160v80H680v80h-80Zm-480-80v-80h400v80H120Z" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Tabla de Actividades -->
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div x-data="{ showModal: false, actividadDetalle: null }">
                <table class="min-w-full border-collapse border border-slate-300">
                    <thead class="bg-slate-900 text-white">
                        <tr>
                            <th class="p-4 text-left border-b">Actividad</th>
                            <th class="p-4 text-left border-b">Estado</th>
                            <th class="p-4 text-left border-b">Detalles</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($actividades as $actividad)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="p-4 flex items-center">
                                    <input type="checkbox" class="mr-2">{{ $actividad->title }}
                                </td>
                                <td class="p-4">
                                    @if ($actividad->trashed())
                                        <span class="text-red-500 border border-red-500 font-semibold px-2 py-1 rounded-lg">
                                            Eliminado
                                        </span>
                                    @else
                                        <span class="text-green-500 border border-green-500 font-semibold px-2 py-1 rounded-lg">
                                            Activo
                                        </span>
                                    @endif
                                </td>
                                <td class="p-4">
                                    <button wire:click="pruebanoc({{$actividad}})"
                                        class="text-slate-700 border border-slate-600 px-4 py-1 rounded-xl hover:bg-slate-100 transition">
                                        Ver
                                    </button>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <!-- Paginación -->
        <div class="flex justify-center mt-4">
            {{ $actividades->links() }}
        </div>
    </div>

    <x-dialog-modal wire:model="mostrarModal2" >
        <x-slot name='title' ></x-slot>
        <x-slot name='content' >
            <div class="">
                <h2 class="text-xl font-bold">Detalles de la Actividad</h2>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Nombre</label>
                    <input type="text" wire:model.live="name"
                        class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Descripción</label>
                    <input type="text" wire:model="description"
                        class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Imagen</label>
                    <img src="{{asset($img)}}" alt="">
                </div>
                <div class="flex justify-end space-x-4">
                    <button
                        class="bg-orange-500 text-white px-4 py-2 rounded-lg">Cerrar</button>
                </div>
            </div>
        </x-slot>
        <x-slot name='footer' ></x-slot>
    </x-dialog-modal>
</div>
