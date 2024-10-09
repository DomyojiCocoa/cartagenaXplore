<div class="container mx-auto mt-8 p-6 bg-gray-100 rounded-lg shadow-md">
    <div class="overflow-x-auto">
        <!-- Botón para crear nuevo sitio -->
        <div class="mb-6 text-left">
            <button wire:click="create" class="bg-green-600 hover:bg-green-500 text-white px-6 py-2 rounded-lg shadow-lg transition-all">
                Crear Nuevo Sitio
            </button>
        </div>

        <!-- Tabla -->
        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-lg">
            <thead class="bg-gray-300">
                <tr>
                    <th class="py-3 px-5 border-b text-center text-sm font-semibold">Nombre</th>
                    <th class="py-3 px-5 border-b text-center text-sm font-semibold">Dirección</th>
                    <th class="py-3 px-5 border-b text-center text-sm font-semibold">Hora Apertura</th>
                    <th class="py-3 px-5 border-b text-center text-sm font-semibold">Hora Cierre</th>
                    <th class="py-3 px-5 border-b text-center text-sm font-semibold">Climas Preferibles</th>
                    <th class="py-3 px-5 border-b text-center text-sm font-semibold">Imagen</th>
                    <th class="py-3 px-5 border-b text-center text-sm font-semibold">Mapa</th>
                    <th class="py-3 px-5 border-b text-center text-sm font-semibold">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sites as $site)
                <tr>
                    <td class="py-3 px-5 border-b text-center">{{ $site->name_site }}</td>
                    <td class="py-3 px-5 border-b text-center">{{ $site->address }}</td>
                    <td class="py-3 px-5 border-b text-center">{{ $site->schedule_open }}</td>
                    <td class="py-3 px-5 border-b text-center">{{ $site->schedule_close }}</td>
                    <td class="py-3 px-5 border-b text-center">{{ $site->weather_preferable }}</td>
                    <td class="py-3 px-5 border-b text-center">
                        @if($site->url_img)
                        <img src="{{ $site->url_img }}" class="h-20 w-20 rounded-lg object-cover shadow-md" alt="Imagen del sitio">
                        @endif
                    </td>
                    <td class="py-3 px-5 border-b text-center">
                        <a href="{{ $site->url_map }}" target="_blank" class="text-blue-500 hover:underline">
                            Ver Mapa
                        </a>
                    </td>
                    <td class="py-3 px-5 border-b text-center">
                        <button wire:click="edit({{ $site->id }})" class="bg-blue-500 hover:bg-blue-400 text-white px-4 py-2 rounded-lg transition-all">
                            Editar
                        </button>
                        <button wire:click="confirmDelete({{ $site->id }})" class="bg-red-500 hover:bg-red-400 text-white px-4 py-2 rounded-lg ml-2 transition-all">
                            Eliminar
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Paginación -->
        <div class="mt-6">
            {{ $sites->links() }}
        </div>
    </div>

    <!-- Modal para crear un nuevo sitio -->
    <x-dialog-modal wire:model="createModalVisible">
        <x-slot name="title">Crear Nuevo Sitio</x-slot>
        <x-slot name="content">
            <!-- Formulario para creación -->
            <div class="space-y-4">
                <input type="text" wire:model="name_site" placeholder="Nombre del Sitio" class="block w-full border-gray-300 rounded-lg shadow-sm">
                <input type="text" wire:model="address" placeholder="Dirección" class="block w-full border-gray-300 rounded-lg shadow-sm">
                <input type="time" wire:model="schedule_open" class="block w-full border-gray-300 rounded-lg shadow-sm">
                <input type="time" wire:model="schedule_close" class="block w-full border-gray-300 rounded-lg shadow-sm">
                <input type="text" wire:model="weather_preferable" placeholder="Climas Preferibles" class="block w-full border-gray-300 rounded-lg shadow-sm">
                <input type="url" wire:model="url_img" placeholder="URL de la Imagen" class="block w-full border-gray-300 rounded-lg shadow-sm">
                <input type="url" wire:model="url_map" placeholder="URL del Mapa" class="block w-full border-gray-300 rounded-lg shadow-sm">
            </div>
        </x-slot>
        <x-slot name="footer">
            <button wire:click="closeCreateModal" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Cancelar</button>
            <button wire:click="store" class="bg-green-500 text-white px-4 py-2 rounded-lg">Crear</button>
        </x-slot>
    </x-dialog-modal>

    <!-- Modal para editar sitio -->
    <x-dialog-modal wire:model="editModalVisible">
        <x-slot name="title">Editar Sitio</x-slot>
        <x-slot name="content">
            <!-- Formulario para edición -->
            <div class="space-y-4">
                <input type="text" wire:model="name_site" placeholder="Nombre del Sitio" class="block w-full border-gray-300 rounded-lg shadow-sm">
                <input type="text" wire:model="address" placeholder="Dirección" class="block w-full border-gray-300 rounded-lg shadow-sm">
                <input type="time" wire:model="schedule_open" class="block w-full border-gray-300 rounded-lg shadow-sm">
                <input type="time" wire:model="schedule_close" class="block w-full border-gray-300 rounded-lg shadow-sm">
                <input type="text" wire:model="weather_preferable" placeholder="Climas Preferibles" class="block w-full border-gray-300 rounded-lg shadow-sm">
                <input type="url" wire:model="url_img" placeholder="URL de la Imagen" class="block w-full border-gray-300 rounded-lg shadow-sm">
                <input type="url" wire:model="url_map" placeholder="URL del Mapa" class="block w-full border-gray-300 rounded-lg shadow-sm">
            </div>
        </x-slot>
        <x-slot name="footer">
            <button wire:click="closeModal" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Cancelar</button>
            <button wire:click="update" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Actualizar</button>
        </x-slot>
    </x-dialog-modal>

    <!-- Modal para eliminar sitio -->
    <x-confirmation-modal wire:model="deleteModalVisible">
        <x-slot name="title">Eliminar Sitio</x-slot>
        <x-slot name="content">
            ¿Estás seguro de que deseas eliminar este sitio? Esta acción no se puede deshacer.
        </x-slot>
        <x-slot name="footer">
            <button wire:click="closeDeleteModal" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Cancelar</button>
            <button wire:click="delete" class="bg-red-500 text-white px-4 py-2 rounded-lg">Eliminar</button>
        </x-slot>
    </x-confirmation-modal>
</div>
