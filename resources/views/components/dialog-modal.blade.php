@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4 bg-white rounded-lg shadow-md">
        <!-- Título del modal -->
        <div class="text-lg font-semibold text-gray-800 border-b pb-2">
            {{ $title }}
        </div>

        <!-- Contenido del modal -->
        <div class="mt-4 text-sm text-gray-700 leading-relaxed">
            {{ $content }}
        </div>
    </div>

    <!-- Footer del modal -->
    <div class="flex items-center justify-end gap-2 px-6 py-4 bg-gray-50 rounded-b-lg">
        {{ $footer }}
    </div>
</x-modal>
