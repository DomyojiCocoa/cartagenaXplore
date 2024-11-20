<div>
    <div class="relative h-screen">
        <div class=" absolute bg-opacity-25 bg-black z-10 w-full h-screen">
        </div>
        <img src="{{ asset($site->url_img) }}" alt="Castillo san felipe" class="w-full h-full object-cover">
        <div class="absolute inset-0 z-20 bg-black bg-opacity-30 flex flex-col justify-center items-center">
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white">{{$site->name}}</h1>
            <p class="text-xl md:text-2xl lg:text-3xl text-white mt-4">{{$site->eslogan}}</p>
        </div>
    </div>

    <div class="lg:px-40 lg:py-20">
        <div>
            <a href="#" class="flex items-center space-x-2 text-black hover:text-orange-500">

                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>

                <span class="text-3xl font-semibold">Atrás</span>
            </a>
            <h3 class="text-3xl pt-8">{{$site->introduction}}
            </h3>
        </div>
        <div class="pt-20">
            <h1 class="text-6xl font-semibold pb-10">Historia</h1>
            <h3 class="text-3xl">{{$site->history}}
            </h3>
        </div>
        <div class="">
            <div class="flex flex-col md:flex-row items-center justify-between pb-10 ">
                <!-- Texto -->
                <div class="md:w-1/2">
                    <h2 class="text-6xl font-semibold py-10">Why do we use it?</h2>
                    <p class="text-3xl">
                        {{$site->extra}}
                    </p>
                </div>

                <!-- Imagen -->
                <div class="">
                    <img src="{{ asset( $site->url_img) }}" alt="Castillo San Felipe" class="rounded-lg shadow-lg  w-[45rem] h-[45rem]">
                </div>
            </div>
        </div>
        <div class="pt-10">
            <h1 class="text-6xl font-semibold">Mas sitios</h1>
            <div class="flex justify-around items-center">
                <livewire:sites.more-sites :id="$site->id"/>
            </div>
        </div>
    </div>

</div>
