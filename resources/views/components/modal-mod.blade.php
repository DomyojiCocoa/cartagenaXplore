@props(['id' => null, 'maxWidth' => '2xl'])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <!-- Contenedor principal del modal -->
    <div class="px-6 py-4">
        <!-- Título -->
        <div class="text-lg font-bold text-gray-900 border-b pb-2">
            {{ $title }}
        </div>

        <!-- Contenido -->
        <div class="mt-4 text-sm text-gray-600 leading-relaxed">
            {{ $content }}
        </div>
    </div>

    <!-- Footer -->
    <div class="flex items-center justify-end gap-4 px-6 py-4 bg-gray-100 border-t">
        {{ $footer }}
    </div>
</x-modal>

