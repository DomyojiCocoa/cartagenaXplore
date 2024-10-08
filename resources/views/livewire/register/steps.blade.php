<div class="">
    <!-- items-start y padding superior añadido -->
        <div class="bg-white rounded-lg shadow-lg w-[350px] sm:p-10 ">
            <!-- Logo y nombre -->
            <div class="flex justify-center items-start mb-10"> <!-- Reducido el margen inferior -->
                <div class="bg-black rounded-full flex w-12 h-12 justify-center items-center">
                    <span class="text-white text-xs font-bold">Logo</span>
                </div>
                <h2 class="text-lg font-bold text-center text-gray-900 pl-3">CartagenaXplore</h2>
            </div>
            @switch($pagina)
                @case(1)

                    <!-- Título del formulario -->
                    <h1 class="text-3xl font-bold text-center text-gray-900 mb-4">Crear una cuenta</h1>

                    <!-- Link a iniciar sesión -->
                    <p class="text-center text-sm text-gray-600 mb-6">
                        ¿Ya tienes cuenta? <a href="{{ route('login')}}" class="text-orange-500 font-semibold">Iniciar sesión</a>
                    </p>

                    <!-- Formulario de registro -->
                    <div class="mb-4">
                        <label for="email" class="sr-only">Dirección de email</label>
                        <input
                        wire:model="email"
                        type="email" id="email"
                        class="w-full border border-gray-300 p-3
                        rounded-lg focus:outline-none focus:ring-2
                         focus:ring-orange-500"
                        placeholder="Dirección de email">
                    </div>

                    <button wire:click="siguiente" class="w-full bg-orange-500 text-white p-2 rounded-3xl font-semibold hover:bg-orange-600 transition duration-200">
                        Continuar
                    </button>

                    <!-- Texto de términos y condiciones -->
                    <p class="mt-4 text-center text-xs text-gray-500 mb-10">
                        Al registrarte, aceptas nuestros <a href="#" class="underline">términos del servicio</a> y <a href="#" class="underline">política de privacidad</a>. Podrás cambiar la configuración de las notificaciones de los correos electrónicos de marketing en tu cuenta CartagenaXplore.
                    </p>
                    @break
                @case(2)
                    <div class="mb-4">
                        <input
                            id="password"
                            name="password"
                            wire:model="password"
                            type="password"
                            autocomplete="current-password"
                            placeholder="Contraseña"
                            required
                            class="block w-full rounded-md border border-gray-300 px-4 py-3 text-gray-900 placeholder-gray-400 focus:ring-[#a85923] focus:border-[#a85923] focus:outline-none sm:text-sm"
                        >
                    </div>
                    @break

                @default

            @endswitch
        </div>


</div>

