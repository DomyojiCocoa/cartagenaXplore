<div class="container mx-auto mt-8 px-16">
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <!-- Header de tabla con filtros y búsqueda -->
        <div class="flex items-center justify-between p-4 bg-white border-b">
            <input type="text" placeholder="Nombre o palabra clave" class="w-1/2 p-2 border border-gray-300 rounded-lg">
            <div>
                <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">Añadir usuario</button>
                <button class="bg-gray-300 text-gray-600 px-4 py-2 rounded hover:bg-gray-400 ml-2">Eliminar usuarios</button>
            </div>
        </div>

        <!-- Tabla de usuarios -->
        <table class="min-w-full bg-white border-collapse">
            <thead>
                <tr class="bg-gray-200 text-gray-600 text-left">
                    <th class="py-3 px-6 font-semibold text-center">Nombre</th>
                    <th class="py-3 px-6 font-semibold text-center">Correo</th>
                    <th class="py-3 px-6 font-semibold text-center">Estado</th>
                    <th class="py-3 px-6 font-semibold text-center">Detalles</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-4 px-6 text-center">{{ $user->name }}</td>
                    <td class="py-4 px-6 text-center">{{ $user->email }}</td>
                    <td class="py-4 px-6 text-center">
                        @if($user->estado == 'Activo')
                        <span class="text-green-500 font-semibold">Activo</span>
                        @else
                        <span class="text-red-500 font-semibold">Eliminado</span>
                        @endif
                    </td>
                    <td class="py-4 px-6 text-center">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Ver</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Paginación -->
        <div class="p-4 bg-white border-t">
            {{ $users->links() }}
        </div>
    </div>
</div>
