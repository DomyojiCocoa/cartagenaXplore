<x-app-layout>
    <div>
        <div class="bg-body-bg7 bg-cover bg-center w-full min-h-[55rem] sm:min-h-[40rem] md:min-h-[50rem] lg:min-h-[55rem] flex flex-col items-center justify-center relative">
            <div class="absolute bg-opacity-25 bg-black w-full h-full z-10"></div>
            <div class="z-20 text-center text-white">
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-9xl font-semibold leading-tight">
                    Tu plan, tu estilo
                </h1>
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-semibold leading-tight mt-4">
                    Elige, organiza y disfruta de tu próxima aventura
                </h2>
            </div>
        </div>

        <div class=" ">
            <div class="">
                <div class="px-20 py-16">
                    <h1 class="lg:text-6xl md:text-8xl sm:text-8xl font-semibold mb-20">Planes prediseñados</h1>

                </div>
                <div class="flex justify-around items-center">
                    <livewire:plans.organize />

                </div>
            </div>
        </div>
        <livewire:footer />
        <livewire:scroll-top-btn />
    </div>
</x-app-layout>
