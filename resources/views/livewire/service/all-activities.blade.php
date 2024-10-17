<div class="min-h-screen">
    <div class="p-4 ml-1 border-l border-black">

        <div class="flex flex-col sm:flex-row justify-between items-center mb-4 space-y-4 sm:space-y-0">

            <div class="relative w-full sm:w-64">
                <input type="text" placeholder="Nombre o palabra clave"
                    class="border border-gray-300 p-2 pl-10 rounded-2xl w-full" />
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    fill="#666666" class="absolute left-2 top-2 pointer-events-none">
                    <path
                        d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                </svg>
            </div>

            <h2 class="text-center sm:text-left">{{ $sites->total() }} resultados</h2>
            <select class="border-0 ring-white">
                <option>Ordenar clima por: Climas variados</option>
            </select>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($sites as $site)
                <a href="{{ route('siteInfo')}}">
                    <div class="w-full border rounded-lg shadow-lg relative group" style="background-image: url('{{ $site->url_img }}'); background-size: cover; background-position: center;">
                        <div class="card shadow-md w-full h-[20rem] group gap-[1.3em] rounded-sm relative flex justify-end flex-col z-[1] overflow-hidden">
                            <div class="absolute top-0 left-0 h-full w-full">
                                <div class="w-full h-full transition-transform duration-500 transform group-hover:scale-110" wire:key="site-{{ $site->id }}">
                                    <img class="w-full h-full object-cover" src="{{ $site->url_img }}?v={{ now()->timestamp }}" loading="lazy">
                                </div>
                            </div>
                            <div class="container bg-black bg-opacity-35 hover:bg-opacity-85 z-[2] relative font-nunito flex flex-col p-[1.5rem] gap-[0.5rem]">
                                <div class="h-fit w-full">
                                    <h1 class="text-[1.5rem] font-semibold text-white">
                                        {{ $site->name_site }}
                                    </h1>
                                </div>
                                <p class="font-nunito block text-blue-50 font-light relative h-[0em] group-hover:h-[6em] leading-[1.2em] duration-500 overflow-hidden">
                                    {{ $site->address }}
                                </p>
                                <div class="flex items-center">
                                    <!-- Estrellas -->
                                    @for ($i = 0; $i < 5; $i++)
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 -960 960 960" width="1.5rem" fill="#F1C40F">
                                            <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                                        </svg>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $sites->links() }}
        </div>
    </div>
</div>
