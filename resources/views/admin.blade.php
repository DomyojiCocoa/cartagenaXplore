<x-guest-layout>
    <div class="flex w-full">
        <div class="w-1/5 bg-slate-900 min-h-screen p-4 flex flex-col">
            @include('livewire.sidebar')
        </div>
        <div class="w-screen">
            @livewire('admin.component-viewer',['caso' => $caso])
        </div>
    </div>
    {{-- <div class="flex w-full">
        <div class="hidden lg:flex w-fit z-40">
            @include('livewire.sidebar')
        </div>
        <div class="flex flex-col w-full lg:ml-64">
            <div class=" z-30">
                @include('navigation-menu')
            </div>
            <div class="">
                <div>
                    @livewire('estudiante.estudiante-practica',['caso' => $caso])
                </div>
            </div>
        </div>
    </div> --}}
</x-guest-layout>
{{-- <livewire:animated-counter :targetCount="100000000" /> --}}
