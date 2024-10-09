<div class="grid grid-cols-3 gap-4 ">
    @foreach ( $sites as $site )
        
    <div class="w-full border rounded-lg shadow-lg relative group" style="background-image: url('{{$site->url_img}}'); background-size: cover; background-position: center;">
        <div class="card shadow-md w-full h-[27rem] group gap-[1.3em] rounded-sm relative flex justify-end flex-col z-[1] overflow-hidden">
            <div class="absolute top-0 left-0 h-full w-full">
                <div class="w-full h-full transition-transform duration-500 transform group-hover:scale-110" wire:key="site-{{ $site->id }}">
                    <img class="w-full h-full object-cover" src="{{$site->url_img}}?v={{ now()->timestamp }}" loading="lazy">
                </div>
            </div>
            <div class="container bg-black bg-opacity-35 hover:bg-opacity-85 z-[2] relative font-nunito flex flex-col p-[1.5rem] gap-[0.5rem]">
                <div class="h-fit w-full">
                    <h1 class="text-[1.5rem] font-semibold text-white">
                        {{ $site->name_site }}
                    </h1>
                </div>
                <p class="font-nunito block text-blue-50  font-light relative h-[0em] group-hover:h-[6em] leading-[1.2em] duration-500 overflow-hidden">
                    {{$site->address}}
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
    @endforeach

</div>
