<div class="container mx-auto mt-8">
    <div class="overflow-x-auto">
        <!-- Botón para crear nuevo usuario -->
        <div class="mb-4">
            <button wire:click="create" class="bg-green-500 text-white px-4 py-2 rounded">Crear Nuevo Usuario</button>
        </div>

        <!-- Tabla de usuarios -->
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-2 px-4 border-b text-center">Nombre</th>
                    <th class="py-2 px-4 border-b text-center">Correo</th>
                    <th class="py-2 px-4 border-b text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td class="py-2 px-4 border-b text-center">{{ $user->name }}</td>
                    <td class="py-2 px-4 border-b text-center">{{ $user->email }}</td>
                    <td class="py-2 px-4 border-b text-center">
                        <button wire:click="edit({{ $user->id }})" class="bg-blue-500 text-white px-4 py-2 rounded">Editar</button>
                        <button wire:click="delete({{ $user->id }})" class="bg-red-500 text-white px-4 py-2 rounded ml-2">Eliminar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Paginación -->
        <div class="mt-4">
            {{ $users->links() }}
        </div>
    </div>

    <!-- Modal de edición -->
    @if($editModalVisible)
    <div class="fixed inset-0 z-10 flex items-center justify-center bg-gray-900 bg-opacity-50">
        <div class="bg-white p-6 rounded-lg w-1/3">
            <h2 class="text-xl font-bold mb-4">Editar Usuario</h2>

            <!-- Formulario de edición -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2">Nombre:</label>
                <input type="text" wire:model="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none">
                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2">Correo:</label>
                <input type="email" wire:model="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none">
                @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <!-- Botones -->
            <div class="flex justify-end">
                <button wire:click="update" class="bg-blue-500 text-white px-4 py-2 rounded mr-2">Actualizar</button>
                <button wire:click="closeModal" class="bg-gray-300 text-gray-700 px-4 py-2 rounded">Cancelar</button>
            </div>
        </div>
    </div>
    @endif

    <!-- Modal de creación -->
    @if($createModalVisible)
    <div class="fixed inset-0 z-10 flex items-center justify-center bg-gray-900 bg-opacity-50">
        <div class="bg-white p-6 rounded-lg w-1/3">
            <h2 class="text-xl font-bold mb-4">Crear Nuevo Usuario</h2>

            <!-- Formulario de creación -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2">Nombre:</label>
                <input type="text" wire:model="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none">
                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2">Correo:</label>
                <input type="email" wire:model="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none">
                @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2">Contraseña:</label>
                <input type="password" wire:model="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none">
                @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <!-- Botones -->
            <div class="flex justify-end">
                <button wire:click="store" class="bg-green-500 text-white px-4 py-2 rounded mr-2">Crear</button>
                <button wire:click="closeCreateModal" class="bg-gray-300 text-gray-700 px-4 py-2 rounded">Cancelar</button>
            </div>
        </div>
    </div>
    @endif
</div>
