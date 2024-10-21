<div class="pt-72 flex">

    <livewire:sidebar />

    <div class="w-4/5 p-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold">Usuarios</h1>
        </div>
        <div class="flex justify-between items-center mb-4">
            <div class="flex items-center">
                <input type="text" placeholder="Nombre o palabra clave" class="border rounded p-2 mr-4">
                <label class="flex items-center">
                    Seleccionar usuarios
                    <input type="checkbox" class="ml-2">
                </label>
            </div>
            <div class="flex items-center">
                <button class="bg-orange-500 text-white px-4 py-2 rounded-xl mr-2">Añadir usuario</button>
                <button class=" border border-slate-600 text-gray-500 px-4 py-2 rounded-xl">Eliminar usuarios</button>
                <button class="px-3">

                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#666666"><path d="M440-120v-240h80v80h320v80H520v80h-80Zm-320-80v-80h240v80H120Zm160-160v-80H120v-80h160v-80h80v240h-80Zm160-80v-80h400v80H440Zm160-160v-240h80v80h160v80H680v80h-80Zm-480-80v-80h400v80H120Z" /></svg>
                </button>
            </div>
        </div>
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <table class="min-w-full">
                <thead class="bg-slate-900 text-white">
                    <tr>
                        <th class="p-4 text-left">Nombre</th>
                        <th class="p-4 text-left">Correo</th>
                        <th class="p-4 text-left">Estado</th>
                        <th class="p-4 text-left">Detalles</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-4 flex items-center">
                            <input type="checkbox" class="mr-2"> {{ $user->name }}
                        </td>
                        <td class="py-4 px-6 ">{{ $user->email }}</td>
                        <td class="p-4 flex items-center">
                            @if($user->estado == 'Activo')
                            <span class="text-green-500 border border-green-500 font-semibold">Activo</span>
                            @else
                            <span class="text-red-500  border border-red-500 font-semibold roude rounded-lg">Eliminado</span>
                            @endif
                        </td>
                        <td class="p-4">
                            <button class="text-slate-700 border border-slate-600 px-8 py-1 rounded-xl">Ver</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="flex justify-center items-center mt-4">
            <div class="p-4 bg-white border-t">
                {{ $users->links() }}
            </div>
        </div>

    </div>
</div>
