<div class="container mx-auto mt-8">
    <div class="overflow-x-auto">
        <!-- Botón para crear nuevo sitio -->
        <div class="mb-4">
            <button wire:click="create" class="bg-green-500 text-white px-4 py-2 rounded">Crear Nuevo Sitio</button>
        </div>

        <!-- Tabla -->
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-2 px-4 border-b text-center">Nombre</th>
                    <th class="py-2 px-4 border-b text-center">Dirección</th>
                    <th class="py-2 px-4 border-b text-center">Hora Apertura</th>
                    <th class="py-2 px-4 border-b text-center">Hora Cierre</th>
                    <th class="py-2 px-4 border-b text-center">Climas Preferibles</th>
                    <th class="py-2 px-4 border-b text-center">Imagen</th>
                    <th class="py-2 px-4 border-b text-center">Mapa</th>
                    <th class="py-2 px-4 border-b text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sites as $site)
                <tr>
                    <td class="py-2 px-4 border-b text-center">{{ $site->name_site }}</td>
                    <td class="py-2 px-4 border-b text-center">{{ $site->address }}</td>
                    <td class="py-2 px-4 border-b text-center">{{ $site->schedule_open }}</td>
                    <td class="py-2 px-4 border-b text-center">{{ $site->schedule_close }}</td>
                    <td class="py-2 px-4 border-b text-center">{{ $site->weather_preferable }}</td>
                    <td class="py-2 px-4 border-b text-center">
                        @if($site->url_img)
                        <img src="{{ $site->url_img }}" class="h-10 w-10" alt="Imagen del sitio">
                        @endif
                    </td>
                    <td class="py-2 px-4 border-b text-center">
                        <a href="{{ $site->url_map }}" target="_blank" class="text-blue-500">Ver Mapa</a>
                    </td>
                    <td class="py-2 px-4 border-b text-center">
                        <button wire:click="edit({{ $site->id }})" class="bg-blue-500 text-white px-4 py-2 rounded">Editar</button>
                        <button wire:click="confirmDelete({{ $site->id }})" class="bg-red-500 text-white px-4 py-2 rounded ml-2">Eliminar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Paginación -->
        <div class="mt-4">
            {{ $sites->links() }}
        </div>
    </div>

    <!-- Modal para crear un nuevo sitio -->
    <x-dialog-modal wire:model="createModalVisible">
        <x-slot name="title">Crear Nuevo Sitio</x-slot>
        <x-slot name="content">
            <!-- Formulario para creación -->
            <div class="space-y-4">
                <input type="text" wire:model="name_site" placeholder="Nombre del Sitio" class="block w-full border-gray-300 rounded-md shadow-sm">
                <input type="text" wire:model="address" placeholder="Dirección" class="block w-full border-gray-300 rounded-md shadow-sm">
                <input type="time" wire:model="schedule_open" placeholder="Hora de Apertura" class="block w-full border-gray-300 rounded-md shadow-sm">
                <input type="time" wire:model="schedule_close" placeholder="Hora de Cierre" class="block w-full border-gray-300 rounded-md shadow-sm">
                <input type="text" wire:model="weather_preferable" placeholder="Climas Preferibles" class="block w-full border-gray-300 rounded-md shadow-sm">
                <input type="url" wire:model="url_img" placeholder="URL de la Imagen" class="block w-full border-gray-300 rounded-md shadow-sm">
                <input type="url" wire:model="url_map" placeholder="URL del Mapa" class="block w-full border-gray-300 rounded-md shadow-sm">
            </div>
        </x-slot>
        <x-slot name="footer">
            <button wire:click="closeCreateModal" class="bg-gray-500 text-white px-4 py-2 rounded">Cancelar</button>
            <button wire:click="store" class="bg-green-500 text-white px-4 py-2 rounded">Crear</button>
        </x-slot>
    </x-dialog-modal>

    <!-- Modal para editar sitio -->
    <x-dialog-modal wire:model="editModalVisible">
        <x-slot name="title">Editar Sitio</x-slot>
        <x-slot name="content">
            <!-- Formulario para edición -->
            <div class="space-y-4">
                <input type="text" wire:model="name_site" placeholder="Nombre del Sitio" class="block w-full border-gray-300 rounded-md shadow-sm">
                <input type="text" wire:model="address" placeholder="Dirección" class="block w-full border-gray-300 rounded-md shadow-sm">
                <input type="time" wire:model="schedule_open" placeholder="Hora de Apertura" class="block w-full border-gray-300 rounded-md shadow-sm">
                <input type="time" wire:model="schedule_close" placeholder="Hora de Cierre" class="block w-full border-gray-300 rounded-md shadow-sm">
                <input type="text" wire:model="weather_preferable" placeholder="Climas Preferibles" class="block w-full border-gray-300 rounded-md shadow-sm">
                <input type="url" wire:model="url_img" placeholder="URL de la Imagen" class="block w-full border-gray-300 rounded-md shadow-sm">
                <input type="url" wire:model="url_map" placeholder="URL del Mapa" class="block w-full border-gray-300 rounded-md shadow-sm">
            </div>
        </x-slot>
        <x-slot name="footer">
            <button wire:click="closeModal" class="bg-gray-500 text-white px-4 py-2 rounded">Cancelar</button>
            <button wire:click="update" class="bg-blue-500 text-white px-4 py-2 rounded">Actualizar</button>
        </x-slot>
    </x-dialog-modal>

    <!-- Modal para eliminar sitio -->
    <x-confirmation-modal wire:model="deleteModalVisible">
        <x-slot name="title">Eliminar Sitio</x-slot>
        <x-slot name="content">
            ¿Estás seguro de que deseas eliminar este sitio? Esta acción no se puede deshacer.
        </x-slot>
        <x-slot name="footer">
            <button wire:click="closeDeleteModal" class="bg-gray-500 text-white px-4 py-2 rounded">Cancelar</button>
            <button wire:click="delete" class="bg-red-500 text-white px-4 py-2 rounded">Eliminar</button>
        </x-slot>
    </x-confirmation-modal>
</div>




{{-- <div class="flex items-center justify-center min-h-screen p-4 pt-28">
    <div class="w-full max-w-4xl bg-white rounded-lg shadow-lg">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs text-gray-600 uppercase tracking-wider">
                        Nombre
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs  text-gray-600 uppercase tracking-wider">
                        Dirección
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs   text-gray-600 uppercase tracking-wider">
                        Hora apertura
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs  text-gray-600 uppercase tracking-wider">
                        Hora cierre
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs  text-gray-600 uppercase tracking-wider">
                        Climas preferibles
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs text-gray-600 uppercase tracking-wider">
                        Imagen
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs text-gray-600 uppercase tracking-wider">
                        Mapa
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs text-gray-600 uppercase tracking-wider">
                        Opciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (!$sites)
                    <tr>
                        <td colspan="8" class="px-6 py-4 text-center text-sm font-medium text-gray-900">No se encontraron solicitudes</td>
                    </tr>
                @else
                    @foreach ($sites as $site)
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 font-semibold">{{ $site->name_site }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900">{{ $site->address }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900">{{ $site->schedule_open }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900">{{ $site->schedule_close }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900">{{ $site->weather_preferable }}</p>
                        </td>
                        <td class=" border-b border-gray-200 bg-white text-sm">
                            <img src="{{ $site->url_img }}" class="h-40 w-40 rounded-lg shadow-md object-cover">
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <a href="{{ $site->url_map }}" class="text-blue-500 hover:underline" target="_blank">Ver en mapa</a>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <button onclick="openModal({{ $site->id }})" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div id="modal-{{ $site->id }}" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
                        <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
                            <h2 class="text-lg font-bold text-gray-800 mb-4">¿Estás seguro de eliminar este sitio?</h2>
                            <p class="text-gray-600 mb-6">Esta acción no se puede deshacer.</p>
                            <div class="flex justify-end space-x-4">
                                <button onclick="closeModal({{ $site->id }})" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 transition">Cancelar</button>
                                <button wire:click="eliminar({{ $site->id }})" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition">Eliminar</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

<script>
    function openModal(id) {
        document.getElementById('modal-' + id).classList.remove('hidden');
    }

    function closeModal(id) {
        document.getElementById('modal-' + id).classList.add('hidden');
    }
</script> --}}
