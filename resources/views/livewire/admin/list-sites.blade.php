<div class="flex items-center justify-center min-h-screen p-4">
    <div class="w-full max-w-lg bg-white rounded-lg shadow-lg">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Nombre
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Dirección
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Hora apertura
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Hora cierre
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Climas preferibles
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Imagen
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Mapa
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
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
                            <p class="text-gray-900 whitespace-nowrap overflow-hidden text-ellipsis">{{ $site->name_site }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $site->address }}</p>
                        </td>

                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $site->schedule_open }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $site->schedule_close }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $site->weather_preferable }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <img src="{{ $site->url_img }}" class="h-16 w-16">
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <a href="{{ $site->url_map }}" class="text-gray-900 whitespace-no-wrap">Ver en mapa</a>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <button wire:click="abrir({{ $site->id }})" class="bg-red-500 text-white px-4 py-2 rounded">Eliminar</button>
                        </td>
                    </tr>
                    <x-modal wire:model="modalAlgo">
                        <h1>¿Estás seguro de eliminar este sitio?</h1>
                        <button wire:click="eliminar" class="bg-red-500">ELIMINAR</button>
                    </x-modal>
                    <x-modal wire:model="modalEdit" >
                        <h1>Estoy en el editando</h1>
                    </x-modal>



                    {{-- <div id="modal-edit{{ $site->id }}" class="fixed inset-0 z-50 hidden     bg-opacity-50 flex items-center justify-center">
                        <div class="bg-white p-5 rounded shadow-lg">
                            <h2 class="text-lg font-bold">¿ Estas seguro de eliminar {{ $site->name_site }} ?</h2>
                            <form>

                                <button type="button" onclick="closeModal({{ $site->id }})" class="mt-4 bg-red-500 text-white px-4 py-2 rounded">
                                    Eliminar
                                </button>

                            </form>
                        </div>
                    </div> --}}
                        <!-- Modal -->
                        <div id="modal-{{ $site->id }}" class="fixed inset-0 z-50 hidden     bg-opacity-50 flex items-center justify-center">
                            <div class="bg-white p-5 rounded shadow-lg">
                                <h2 class="text-lg font-bold">Detalles de {{ $site->name_site }}</h2>
                                <form>
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700">Nombre del sitio</label>
                                        <input type="text" value="{{ $site->name_site }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700">Dirección</label>
                                        <input type="text" value="{{ $site->address }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700">Horario de apertura</label>
                                        <input type="text" value="{{ $site->schedule_open }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700">Horario de cierre</label>
                                        <input type="text" value="{{ $site->schedule_close }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700">Clima Preferible</label>
                                        <input type="text" value="{{ $site->weather_preferable }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700">Imagen</label>
                                        <img src="{{ $site->url_img }}" class="h-16 w-16 mb-2" />
                                        <input type="text" value="{{ $site->url_img }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700">Mapa</label>
                                        <input type="text" value="{{ $site->url_map }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                                        <a href="{{ $site->url_map }}" target="_blank" class="text-blue-500">Ver en mapa</a>
                                    </div>
                                    <button type="button" onclick="closeModal({{ $site->id }})" class="mt-4 bg-red-500 text-white px-4 py-2 rounded">
                                        Cerrar
                                    </button>
                                    <button type="button" wire:click="updateInfoSite({{ $site }})" class="mt-4 bg-orange-500 text-white px-4 py-2 rounded">
                                        Actualizar
                                    </button>
                                </form>
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
    function openModal(id) {
        document.getElementById('modal-edit' + id).classList.remove('hidden');
    }

    function closeModal(id) {
        document.getElementById('modal-edit' + id).classList.add('hidden');
    }
</script>
