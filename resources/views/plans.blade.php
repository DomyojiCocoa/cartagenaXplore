<x-app-layout>
    <div>
        <div class="bg-body-bg7  bg-cover bg-start w-full h-[55rem] flex flex-col items-center justify-center ">
            <div class=" absolute bg-opacity-25 bg-black z-10 w-full h-[55rem]">
            </div>
            <div class="z-20">
                <h1 class="text-center text-white text-9xl  font-semibold leading-tight">Tu plan, tu estilo </h1>
                <h2 class="text-center text-white text-4xl  font-semibold leading-tight">Elige, organiza y disfruta de tu
                    proxima aventura </h2>
            </div>
        </div>
        <div class="px-36 py-20">
            <div class="px-20 py-16">
                <h1 class="lg:text-6xl md:text-4xl font-semibold mb-20">Planes diseñados</h1>
                <livewire:plans.organize />
            </div>
        </div>
        <livewire:footer />
    </div>
</x-app-layout>
