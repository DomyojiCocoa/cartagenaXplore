<div class="">
    <div class="bg-white rounded-lg shadow-lg w-full sm:w-[28rem] md:w-[30rem] lg:w-[32rem] lg:h-[40rem] p-6 sm:p-10 mx-auto">
        <div class="flex justify-center text-center mb-10">
            <!-- Logo -->
            <img src="img/13.png" alt="CartagenaXplore Logo" class="w-32 sm:w-40 md:w-48 lg:w-52">
        </div>

        @switch($pagina)
            @case(1)
                <!-- Título de Inicio de Sesión -->
                <h2 class="mt-6 text-3xl sm:text-4xl md:text-5xl lg:text-6xl text-center text-gray-900 font-normal pb-6 md:pb-10">Inicio de sesión</h2>
                <h2 class="text-center text-sm sm:text-base md:text-lg lg:text-xl text-gray-600 mt-2">¿No tienes cuenta?
                    <a href="{{ route('register') }}"
                        class="text-orange-500 hover:text-orange-400 font-medium text-sm sm:text-base md:text-lg lg:text-xl">Regístrate</a>
                </h2>

                <!-- Campo de Email -->
                <div class="mt-6">
                    <input placeholder="Dirección de email" id="email" wire:model="email" type="email"
                        required
                        class="block w-full rounded-md border border-gray-300 px-4 py-2 sm:py-3 text-sm sm:text-base md:text-lg lg:text-2xl text-gray-900 placeholder-gray-400 focus:ring-orange-500 focus:border-orange-500 focus:outline-none">
                </div>

                <!-- Botón Continuar -->
                <div class="mt-8">
                    <button wire:click="siguiente"
                        class="w-full bg-orange-500 hover:bg-orange-400 text-white py-2 sm:py-3 rounded-full font-semibold text-center shadow-md transition duration-300 text-sm sm:text-lg lg:text-2xl">
                        Continuar
                    </button>
                </div>

            @break

            @case(2)
                <!-- Mensaje de Bienvenida -->
                <h2 class="mt-6 text-3xl sm:text-4xl md:text-5xl lg:text-6xl text-center text-gray-900 font-normal pb-6 lg:pb-8">¡Bienvenido!</h2>

                <!-- Email del Usuario -->
                <p class="text-center text-sm sm:text-lg lg:text-2xl text-gray-600 mt-2">{{ $email }}</p>

                <!-- Botón para Usar Otra Cuenta -->
                <div class="mb-3 flex justify-center">
                    <button wire:click="atras"
                        class="text-orange-500 text-sm sm:text-base lg:text-xl hover:text-orange-400 font-medium pt-2">Usar otra cuenta</button>
                </div>

                <!-- Campo de Contraseña -->
                <div class="mb-4 pt-4">
                    <input id="password" name="password" wire:model="password" type="password"
                        placeholder="Contraseña" required
                        class="block w-full rounded-md border border-gray-300 px-4 py-2 sm:py-3 text-sm sm:text-base md:text-lg lg:text-2xl text-gray-900 placeholder-gray-400 focus:ring-orange-500 focus:border-orange-500 focus:outline-none">
                </div>

                <!-- Botón de Continuar -->
                <div class="mt-5">
                    <button wire:click="login" wire:navigate
                        class="w-full bg-orange-500 hover:bg-orange-400 text-white py-2 sm:py-3 rounded-full font-semibold text-center shadow-md transition duration-300 text-sm sm:text-lg lg:text-2xl">
                        Continuar
                    </button>
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
</div>
