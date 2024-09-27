<div class=" " >
    <div class="flex flex-col justify-center px-6 py-12 lg:px-8 ">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
          <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
        </div>
      
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            @switch($pagina)
                @case(1)
                    <livewire:login.email wire:model="correo"/>
                    @break
                @case(2)
                    <livewire:login.password wire:model="contraseña"/>
                    <h1>{{ $correo }}</h1>

                    @break
                @default
                    
            @endswitch

            @switch($pagina)
                @case(1)
                    <div>
                        <button wire:click='siguiente' class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm 
                        font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline 
                        focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Continuar</button>
                    </div>
                    @break
                @case(2)
                    <div>
                        <button class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm 
                        font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline 
                        focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Iniciar sesion</button>
                    </div>
                    @break
                @default
                    
            @endswitch
            {{-- <livewire:animated-counter :targetCount="10000000000" /> --}}
    
            
        </div>
    </div>
</div>
