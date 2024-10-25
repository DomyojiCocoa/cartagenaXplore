<x-app-layout>
    <div class="pt-2">
        <div class="bg-body-bg6  bg-cover bg-start w-full h-[55rem] flex flex-col items-center justify-center ">
            <div>
                <h1 class="text-center text-white text-9xl  font-semibold leading-tight">Sitios fascinantes</h1>
                <h2 class="text-center text-white text-5xl  font-semibold leading-tight">Vive la magia de cada lugar y
                    sumérgete</h2>
            </div>
        </div>

        <div class="px-36 py-20">

            <div class="px-20 py-16">

                <livewire:sites.all-sites />

            </div>

        </div>
        <livewire:footer />

    </div>



</x-app-layout>
