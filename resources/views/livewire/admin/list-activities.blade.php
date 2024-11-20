<div class="w-full">
    <div class="p-8">

        <!-- Título de la Página -->
        <div class="flex justify-between items-center mb-5">
            <h1 class="text-3xl font-bold">Actividad</h1>
        </div>
        <hr class="border-t-1 border-black my-4">

        <!-- Barra de Búsqueda y Botones -->
        <div class="flex justify-between items-center mb-4">
            <!-- Botones de Acción -->
            <div class="flex items-center space-x-4">
                <button wire:click="openCreate" class="bg-orange-500 text-white px-4 py-2 rounded-xl">Añadir
                    actividad</button>
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
                                    <button wire:click="pruebanoc({{ $actividad }})"
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

    <x-dialog-modal wire:model="mostrarModal2">
        <x-slot name='title'></x-slot>
        <x-slot name='content'>
            <div class="">
                <h2 class="text-xl font-bold">Detalles de la Actividad</h2>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Nombre</label>
                    <input type="text" wire:model.live="name" class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Descripción</label>
                    <input type="text" wire:model="description" class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Imagen</label>
                    <img src="{{ asset($img) }}" alt="">
                </div>
                <div class="flex justify-end space-x-4">
                    <button wire:click="close" class="bg-orange-500 text-white px-4 py-2 rounded-lg">Cerrar</button>
                </div>
            </div>
        </x-slot>
        <x-slot name='footer'></x-slot>
    </x-dialog-modal>

    <x-dialog-modal wire:model="mostrarModalCreate">
        <x-slot name='title'></x-slot>
        <x-slot name='content'>
            <div class="">
                <h2 class="text-xl font-bold">Añadir nueva actividad</h2>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Nombre</label>
                    <input type="text" wire:model="name" class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Descripción</label>
                    <input type="text" wire:model="description" class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    @foreach($campos as $index => $campo)
                        <label class="block mb-2 text-sm font-medium text-gray-900">Realizaras numero {{ $index+1 }}</label>
                        <input type="text" wire:model="campos.{{ $index }}" class="w-full p-2 border rounded-lg">
                    @endforeach
                    <button type="button" wire:click="agregarCampo" class="mt-2">Agregar otro campo</button>
                </div>
                <div>
                    @foreach($campos2 as $index => $campo)
                        <label class="block mb-2 text-sm font-medium text-gray-900">Abarca numero {{ $index+1 }}</label>
                        <input type="text" wire:model="campos2.{{ $index }}" class="w-full p-2 border rounded-lg">
                    @endforeach
                    <button type="button" wire:click="agregarCampo2" class="mt-2">Agregar otro campo</button>
                </div>

                <div>
                    @if (session()->has('message'))
                        <div class="p-4 mb-4 text-green-700 bg-green-100 rounded">
                            {{ session('message') }}
                        </div>
                    @endif

                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700">Subir Imagen</label>
                        <input type="file" id="image" wire:model="img" class="mt-1 block w-full" />

                        @error('img')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Vista Previa de la Imagen -->
                    @if ($img && !is_string($img))
                        <!-- Comprobamos si es un archivo (no una cadena) -->
                        <div class="mb-4">
                            <p>Vista previa:</p>
                            <img src="{{ $img->temporaryUrl() }}" alt="Vista previa" class="w-32 h-32 object-cover">
                        </div>
                    @endif
                    @if ($actividadUpdate && $actividadUpdate->url_img)
                        <div>
                            <p>Imagen:</p>
                            <img src="{{ asset($actividadUpdate->url_img) }}" class="w-32 h-32 object-cover">
                        </div>
                    @endif
                </div>

                <div class="flex justify-end space-x-4">
                    <button wire:click="create" class="bg-orange-500 text-white px-4 py-2 rounded-lg">Crear</button>
                    <button wire:click="closeCreate" class="bg-red-500 text-white px-4 py-2 rounded-lg">Cerrar</button>
                </div>
            </div>
        </x-slot>
        <x-slot name='footer'></x-slot>
    </x-dialog-modal>
</div>
