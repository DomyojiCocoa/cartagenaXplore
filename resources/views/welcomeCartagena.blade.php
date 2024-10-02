
<x-guest-layout >
    <div class="font-satoshi">
        @if (Route::has('login'))
            <div class="     ">
                @auth
                    {{ Auth::user()->name}}
                @else
                <div class="flex  justify-evenly py-10">
                    <div class="flex">

                        <div class="bg-black rounded-full flex w-10 h-10 justify-center items-center">
                            <span class="text-white text-xs font-bold">Logo</span>
                        </div>
                        <h2 class="text-lg font-bold text-center text-gray-900 ">CartagenaXplore</h2>
                    </div>
                    <div class="justify-between	">
                        <a href="" class="pr-4">Inicio</a>
                        <a href=""class="pr-4">Actividades</a>
                        <a href="">Contactanos</a>
                    </div>
                    <div class="flex">

                        <a href="{{ route('login') }}"
                            class=" text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Inicia Sesion </a>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#666666"><path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/></svg>
                    </div>

                </div>
                @endauth
            </div>
            <div class="bg-body-bg2 bg-cover bg-center w-full h-[420px]">
                <div>
                    <div>
                        <h1>32°</h1>
                        <div>
                            <h5>31°-33°</h5>
                        </div>
                    </div>
                    <div>
                        <h1>Cartagena de Indias</h1>
                        <h2>Mar,Oct 1 </h2>
                        <h2>Actualizacion a las 10:22</h2>
                    </div>
                </div>
            </div>





        @endif
        </div>
</x-guest-layout>
