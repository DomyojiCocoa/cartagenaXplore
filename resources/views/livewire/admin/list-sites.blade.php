<div class="flex items-center justify-center min-h-screen p-4 pt-28">
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
</script>
