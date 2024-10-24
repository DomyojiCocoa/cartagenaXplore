<div class=" ">
    <div class="bg-white rounded-lg shadow-lg w-[32rem] h-[47rem]  p-6 sm:p-10 ">

        <div class="flex justify-center items-start mb-10">
            <img src="img/13.png" alt="CartagenaXplore Logo" class=" w-52">
        </div>

        @switch($pagina)
            @case(1)
                <h1 class="mt-6 lg:text-5xl md:text-4xl text-center text-gray-900 font-normal pb-10">Crear una cuenta</h1>

                <p class="text-center lg:text-xl md:text-base text-gray-600 mt-2 mb-4">
                    ¿Ya tienes cuenta? <a href="{{ route('login')}}" class="text-orange-500 font-semibold">Iniciar sesión</a>
                </p>

                <div class="mb-4 pt-7">
                    <label for="email" class="sr-only">Dirección de email</label>
                    <input wire:model="email" type="email" id="email"
                        class="block w-full rounded-md border border-gray-300 px-4 py-3 text-gray-900 placeholder-gray-400 focus:ring-orange-500 focus:border-orange-500 focus:outline-none sm:text-lg lg:text-2xl "
                        placeholder="Dirección de email">
                </div>

                <button wire:click="siguiente"
                    class="w-full bg-orange-500 hover:bg-orange-400 text-white py-3 rounded-full font-semibold text-center shadow-md transition duration-300 sm:text-lg lg:text-2xl">
                    Continuar
                </button>

                <p class="mt-4 text-center text-lg text-gray-500 mb-10">
                    Al registrarte, aceptas nuestros <a href="#" class="underline">términos del servicio</a> y <a
                        href="#" class="underline">política de privacidad</a>. Podrás cambiar la configuración de las
                    notificaciones de los correos electrónicos de marketing en tu cuenta CartagenaXplore.
                </p>
            @break

            @case(2)
                <h1 class="mt-6 lg:text-5xl md:text-4xl text-center text-gray-900 font-normal pb-8">Crear su contraseña</h1>
                <h1 class="text-center lg:text-2xl md:text-base text-gray-600 ">Correo electrónico</h1>

                <div class="mb-4 pt-7">
                    <label for="password" class="sr-only">Contraseña</label>
                    <input wire:model="password" type="password" id="password"
                        class="block w-full rounded-md border border-gray-300 px-4 py-3 text-gray-900 placeholder-gray-400 focus:ring-orange-500 focus:border-orange-500 focus:outline-none sm:text-lg lg:text-2xl"
                        placeholder="Contraseña">
                </div>

                <div class="w-full bg-gray-200 h-1 rounded-full mb-2">
                    <div class="bg-green-500 h-1 rounded-full"></div>
                </div>
                <p class="text-lg text-gray-600 mb-4">Refuerza la contraseña.</p>
                <p class="text-lg text-gray-500 mb-6">
                    La contraseña debe contener un mínimo de 8 caracteres, letras mayúsculas y minúsculas, y símbolos. Nunca
                    reutilices contraseñas antiguas.
                </p>

                <button wire:click="siguiente2"
                    class="w-full bg-orange-500 hover:bg-orange-400 text-white py-3 rounded-full font-semibold text-center shadow-md transition duration-300 sm:text-lg lg:text-2xl">
                    Crear contraseña
                </button>

                <p class="text-center text-xl text-gray-600 mt-4">
                    ¿Ya tienes cuenta? <a href="#" class="text-orange-500 font-semibold">Iniciar sesión</a>
                </p>
            @break

            @case(3)
                <h1 class="mt-6 lg:text-5xl md:text-4xl text-center text-gray-900 font-normal pb-10">Crear su cuenta</h1>
                <h1 class="text-center lg:text-xl md:text-base text-gray-600 mt-2 mb-4">{{ $email}}</h1>

                <div>
                    <div class="pb-5">
                        <input wire:model="name" type="text"
                            class="block w-full rounded-md border border-gray-300 px-4 py-3 text-gray-900 placeholder-gray-400 focus:ring-orange-500 focus:border-orange-500 focus:outline-none sm:text-lg lg:text-2xl"
                            placeholder="Nombre completo">

                    </div>
                    <div class="pb-5">
                        <input wire:model="country" type="text"
                            class="block w-full rounded-md border border-gray-300 px-4 py-3 text-gray-900 placeholder-gray-400 focus:ring-orange-500 focus:border-orange-500 focus:outline-none sm:text-lg lg:text-2xl"
                            placeholder="País">

                    </div>
                    <div class="pb-5">
                        <input wire:model="birthdate" type="date"
                            class="block w-full rounded-md border border-gray-300 px-4 py-3 text-gray-900 placeholder-gray-400 focus:ring-orange-500 focus:border-orange-500 focus:outline-none sm:text-lg lg:text-2xl">

                    </div>
                </div>

                <button wire:click="crearUsuario"
                        class="w-full bg-orange-500 hover:bg-orange-400 text-white py-3 rounded-full font-semibold text-center shadow-md transition duration-300 sm:text-lg lg:text-2xl">
                    Crear cuenta
                </button>

                <p class="text-center text-lg text-gray-600 mt-4">
                    ¿Ya tienes cuenta? <a href="{{ route('login')}}" class="text-orange-500 font-semibold">Iniciar sesión</a>
                </p>
            @break


            @default
        @endswitch
    </div>
</div>
