
<div>
        <div class="flex flex-col items-center mb-6">
            <div class="bg-black rounded-full p-3 mb-4">
                <span class="text-white text-xl font-bold">Logo</span>
            </div>
            <h2 class="text-3xl font-bold text-center text-gray-900">CartagenaXplore</h2>
        </div>

        @switch($pagina)
            @case(1)
                <h2 class="mt-6 text-xl text-center text-gray-900 font-bold">Inicio de sesión</h2>
                <h2 class="text-center text-sm text-gray-600">¿No tienes cuenta?
                    <a href="/register" class="text-[#a85923] hover:text-[#c9773e] font-medium">Regístrate</a>
                </h2>

                <div class="mt-6">
                    <div>
                        <input
                            placeholder="Dirección de email"
                            id="email"
                            wire:model="email"
                            type="email"
                            autocomplete="email"
                            required
                            class="block w-full rounded-md border border-gray-300 px-4 py-2 text-gray-900 placeholder-gray-400 focus:ring-[#a85923] focus:border-[#a85923] focus:outline-none sm:text-sm"
                        >
                    </div>
                </div>

                <div class="mt-4">
                    <button wire:click="siguiente" class="w-full bg-[#a85923] hover:bg-[#c9773e] text-white py-2 rounded-md font-semibold text-center shadow-md">
                        Continuar
                    </button>
                </div>

                <div class="mt-4 text-center">
                    <a href="/" class="text-[#c9773e] hover:underline">¿Has olvidado la contraseña?</a>
                </div>
                @break

            @case(2)
                <h2 class="mt-6 text-xl font-bold text-center text-gray-900">Iniciar sesión con:</h2>
                <p class="text-center text-sm text-gray-600 mb-6">{{ $email }}</p>

                <div class="mb-4">
                    <button wire:click="atras" class="text-[#a85923] hover:text-[#c9773e] font-medium mb-4">Usar otra cuenta</button>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-900">Contraseña</label>
                    <div class="mt-1">
                        <input
                            id="password"
                            name="password"
                            wire:model="password"
                            type="password"
                            autocomplete="current-password"
                            required
                            class="block w-full rounded-md border border-gray-300 px-4 py-2 text-gray-900 placeholder-gray-400
                            focus:ring-[#a85923] focus:border-[#a85923] focus:outline-none sm:text-sm"
                        >
                    </div>
                </div>

                <div class="flex justify-between items-center">
                    <a href="#" class="text-sm text-[#a85923] hover:underline">¿Olvidaste la contraseña?</a>
                </div>

                <div class="mt-6">
                    <button wire:click="login" class="w-full bg-[#a85923] hover:bg-[#c9773e] text-white py-2 rounded-md font-semibold text-center shadow-md">
                        Iniciar sesión
                    </button>
                </div>

                @error('email')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
                @error('password')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
                @break
        @default
        @endswitch
    </div>
</div>

{{-- <div>
    @switch($pagina)
        @case(1)
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight
             text-gray-900">Inicio de sesión</h2>
              <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight
             text-gray-900">¿No tienes cuenta?<a href="/register" class="text-[#a85923] hover:text-[#c9773e]">Registrate</a></h2>


            <div>
                <div class="mt-2">
                    <input placeholder="Direccion de email" id="email" name="email" wire:model="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <button wire:click="siguiente" class="flex w-full justify-center rounded-md bg-[#a85923] px-3 py-1.5 text-sm
                font-semibold leading-6 text-white shadow-sm hover:bg-[#c9773e] focus-visible:outline
                focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#a85923]">Continuar</button>
            </div>
            <a href="/" class="text-[#c9773e] ">¿Has olvidado la contraseña?</a>
            @break
        @case(2)
            {{$email}}

            <div>
                <button wire:click="atras">Usar otra cuenta</button>
            </div>
            <div>
                <div class="flex items-center justify-between">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                <div class="text-sm">
                <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                </div>
            </div>
            <div class="mt-2">
                <input id="password" name="password" wire:model="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            </div>
            <div>
                <button wire:click="login" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm
                font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline
                focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Iniciar sesion</button>
            </div>
            @error('email') <span class="text-red-600">{{ $message }}</span> @enderror
            @error('password') <span class="text-red-600">{{ $message }}</span> @enderror
            @break
        @default
    @endswitch

</div> --}}
