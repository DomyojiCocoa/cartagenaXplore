<div class=" ">
    <div class="bg-white rounded-lg shadow-lg w-full sm:w-[28rem] md:w-[30rem] lg:w-[32rem] lg:h-[40rem] p-6 sm:p-10 mx-auto">
        <div class="flex justify-center items-start mb-10">
            <img src="img/13.png" alt="CartagenaXplore Logo" class="w-32 sm:w-40 md:w-48 lg:w-52">
        </div>

        @switch($pagina)
            @case(1)
                <!-- Título y mensaje de registro -->
                <h1 class="mt-6 text-3xl sm:text-4xl md:text-5xl text-center text-gray-900 font-normal pb-6 md:pb-10">Crear una cuenta</h1>

                <p class="text-center text-sm sm:text-base md:text-lg lg:text-xl text-gray-600 mt-2 mb-4">
                    ¿Ya tienes cuenta? <a href="{{ route('login')}}" class="text-orange-500 font-semibold">Iniciar sesión</a>
                </p>

                <!-- Campo de Email -->
                <div class="mb-4 pt-7">
                    <label for="email" class="sr-only">Dirección de email</label>
                    <input wire:model="email" type="email" id="email"
                        class="block w-full rounded-md border border-gray-300 px-4 py-2 sm:py-3 text-sm sm:text-base md:text-lg lg:text-2xl text-gray-900 placeholder-gray-400 focus:ring-orange-500 focus:border-orange-500 focus:outline-none"
                        placeholder="Dirección de email">
                </div>

                <!-- Botón Continuar -->
                <button wire:click="siguiente"
                    class="w-full bg-orange-500 hover:bg-orange-400 text-white py-2 sm:py-3 rounded-full font-semibold text-center shadow-md transition duration-300 text-sm sm:text-lg lg:text-2xl">
                    Continuar
                </button>

                <!-- Términos del servicio -->
                <p class="mt-4 text-center text-xs sm:text-sm md:text-base text-gray-500 mb-6 md:mb-10">
                    Al registrarte, aceptas nuestros <a href="#" class="underline">términos del servicio</a> y <a href="#" class="underline">política de privacidad</a>. Podrás cambiar la configuración de las notificaciones de los correos electrónicos de marketing en tu cuenta CartagenaXplore.
                </p>
            @break

            @case(2)
                <!-- Crear contraseña -->
                <h1 class="mt-6 text-3xl sm:text-4xl md:text-5xl text-center text-gray-900 font-normal pb-6 lg:pb-8">Crear su contraseña</h1>
                <h1 class="text-center text-sm sm:text-lg lg:text-2xl text-gray-600">Correo electrónico</h1>

                <!-- Campo de Contraseña -->
                <div class="mb-4 pt-7">
                    <label for="password" class="sr-only">Contraseña</label>
                    <input wire:model="password" type="password" id="password"
                        class="block w-full rounded-md border border-gray-300 px-4 py-2 sm:py-3 text-sm sm:text-base md:text-lg lg:text-2xl text-gray-900 placeholder-gray-400 focus:ring-orange-500 focus:border-orange-500 focus:outline-none"
                        placeholder="Contraseña">
                </div>

                <div class="w-full bg-gray-200 h-1 rounded-full mb-2">
                    <div class="bg-green-500 h-1 rounded-full"></div>
                </div>
                <p class="text-sm sm:text-base lg:text-lg text-gray-600 mb-2">Refuerza la contraseña.</p>
                <p class="text-xs sm:text-sm lg:text-lg text-gray-500 mb-6">
                    La contraseña debe contener un mínimo de 8 caracteres, letras mayúsculas y minúsculas, y símbolos. Nunca reutilices contraseñas antiguas.
                </p>

                <!-- Botón Crear contraseña -->
                <button wire:click="siguiente2"
                    class="w-full bg-orange-500 hover:bg-orange-400 text-white py-2 sm:py-3 rounded-full font-semibold text-center shadow-md transition duration-300 text-sm sm:text-lg lg:text-2xl">
                    Crear contraseña
                </button>

                <!-- Mensaje de cuenta existente -->
                <p class="text-center text-sm sm:text-lg text-gray-600 mt-4">
                    ¿Ya tienes cuenta? <a href="#" class="text-orange-500 font-semibold">Iniciar sesión</a>
                </p>
            @break

            @case(3)
                <!-- Crear cuenta -->
                <h1 class="mt-6 text-3xl sm:text-4xl md:text-5xl text-center text-gray-900 font-normal pb-6 lg:pb-10">Crear su cuenta</h1>
                <h1 class="text-center text-sm sm:text-lg lg:text-xl text-gray-600 mt-2 mb-4">{{ $email }}</h1>

                <!-- Campos adicionales -->
                <div class="space-y-4">
                    <div>
                        <input wire:model="name" type="text"
                            class="block w-full rounded-md border border-gray-300 px-4 py-2 sm:py-3 text-sm sm:text-base md:text-lg lg:text-2xl text-gray-900 placeholder-gray-400 focus:ring-orange-500 focus:border-orange-500 focus:outline-none"
                            placeholder="Nombre completo">
                    </div>
                    <div>
                        <input wire:model="country" type="text"
                            class="block w-full rounded-md border border-gray-300 px-4 py-2 sm:py-3 text-sm sm:text-base md:text-lg lg:text-2xl text-gray-900 placeholder-gray-400 focus:ring-orange-500 focus:border-orange-500 focus:outline-none"
                            placeholder="País">
                    </div>
                    <div>
                        <input wire:model="birthdate" type="date"
                            class="block w-full rounded-md border border-gray-300 px-4 py-2 sm:py-3 text-sm sm:text-base md:text-lg lg:text-2xl text-gray-900 placeholder-gray-400 focus:ring-orange-500 focus:border-orange-500 focus:outline-none">
                    </div>
                </div>

                <!-- Botón Crear cuenta -->
                <button wire:click="crearUsuario"
                        class="w-full bg-orange-500 hover:bg-orange-400 text-white py-2 sm:py-3 rounded-full font-semibold text-center shadow-md transition duration-300 text-sm sm:text-lg lg:text-2xl">
                    Crear cuenta
                </button>

                <!-- Mensaje de cuenta existente -->
                <p class="text-center text-sm sm:text-lg text-gray-600 mt-4">
                    ¿Ya tienes cuenta? <a href="{{ route('login')}}" class="text-orange-500 font-semibold">Iniciar sesión</a>
                </p>
            @break
        @endswitch

    </div>
</div>
