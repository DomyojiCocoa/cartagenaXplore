<div class="w-full max-w-sm mx-auto">
    <div class="flex justify-center text-center mb-6">
        <div class="bg-black rounded-full flex w-10 h-10 justify-center items-center">
            <span class="text-white text-xs font-bold">Logo</span>
        </div>
        <h2 class="text-lg font-bold text-center text-gray-900 py-3 px-3">CartagenaXplore</h2>
    </div>

    @switch($pagina)
        @case(1)
            <h2 class="mt-6 text-2xl md:text-4xl text-center text-gray-900 font-bold pb-12">Inicio de sesión</h2>
            <h2 class="text-center text-sm md:text-base text-gray-600">¿No tienes cuenta?
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
                        class="block w-full rounded-md border border-gray-300 px-4 py-3 text-gray-900 placeholder-gray-400 focus:ring-[#a85923] focus:border-[#a85923] focus:outline-none sm:text-sm"
                    >
                </div>
            </div>

            <div class="mt-4">
                <button wire:click="siguiente" class="w-full bg-[#a85923] hover:bg-[#c9773e] text-white py-2 rounded-3xl font-semibold text-center shadow-md">
                    Continuar
                </button>
            </div>

            <div class="mt-4 text-center">
                <a href="/" class="text-[#c9773e] hover:underline">¿Has olvidado la contraseña?</a>
            </div>
        @break

        @case(2)
            <h2 class="mt-6 text-2xl md:text-4xl text-center text-gray-900 font-bold pb-3">¡Bienvenido!</h2>
            <p class="text-center text-sm text-gray-600 mb-4">{{ $email }}</p>

            <div class="mb-4 flex justify-center">
                <button wire:click="atras" class="text-[#a85923] hover:text-[#c9773e] font-medium  ">Usar otra cuenta</button>
            </div>

            <div class="">
                <div class="">
                    <input
                        id="password"
                        name="password"
                        wire:model="password"
                        type="password"
                        autocomplete="current-password"
                        placeholder="Contraseña"
                        required
                        class="block w-full rounded-md border border-gray-300 px-12 text-gray-900 placeholder-gray-400 focus:ring-[#a85923] focus:border-[#a85923] focus:outline-none sm:text-sm "
                    >

                </div>
            </div>


            <div class="mt-6">
                <button wire:click="login" class="w-full bg-[#a85923] hover:bg-[#c9773e] text-white py-2 rounded-3xl font-semibold text-center shadow-md">
                    Continuar
                </button>
            </div>
            <div class="flex justify-center pt-3">
                <a href="#" class="text-sm text-[#a85923] hover:underline">¿Olvidaste la contraseña?</a>
            </div>

            @error('email')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
            @error('password')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        @break
    @endswitch
</div>
