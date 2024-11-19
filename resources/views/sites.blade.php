<x-app-layout>

    <div class="bg-body-bg6 bg-cover bg-center w-full min-h-[55rem] sm:min-h-[40rem] md:min-h-[50rem] lg:min-h-[55rem] flex flex-col items-center justify-center relative">
        <div class="absolute bg-opacity-25 bg-black w-full h-full z-10"></div>
        <div class="z-20 text-center text-white">
            <h1 class="text-4xl sm:text-6xl md:text-7xl lg:text-8xl xl:text-9xl font-semibold leading-tight">
                Sitios fascinantes
            </h1>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-semibold leading-tight mt-4">
                Vive la magia de cada lugar y sumérgete
            </h2>
        </div>
    </div>



    <div class="m-12">

        <div class="flex justify-around items-center">

            <livewire:sites.all-sites />

        </div>

    </div>
    <livewire:footer />

    <livewire:scroll-top-btn />




</x-app-layout>
