<div class="flex justify-center items-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg w-[350px]  p-6 sm:p-10 ">

        <div class="flex justify-center items-start mb-10">
            <div class="bg-black rounded-full flex w-12 h-12 justify-center items-center">
                <span class="text-white text-xs font-bold">Logo</span>
            </div>
            <h2 class="text-lg font-bold text-center text-gray-900 pl-3">CartagenaXplore</h2>
        </div>

        @switch($pagina)
            @case(1)
                <h1 class="text-3xl font-bold text-center text-gray-900 mb-4">Crear una cuenta</h1>

                <p class="text-center text-sm text-gray-600 mb-6">
                    ¿Ya tienes cuenta? <a href="{{ route('login')}}" class="text-orange-500 font-semibold">Iniciar sesión</a>
                </p>

                <div class="mb-4">
                    <label for="email" class="sr-only">Dirección de email</label>
                    <input wire:model="email" type="email" id="email"
                        class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                        placeholder="Dirección de email">
                </div>

                <button wire:click="siguiente"
                    class="w-full bg-orange-500 text-white p-2 rounded-3xl font-semibold hover:bg-orange-600 transition duration-200">
                    Continuar
                </button>

                <p class="mt-4 text-center text-xs text-gray-500 mb-10">
                    Al registrarte, aceptas nuestros <a href="#" class="underline">términos del servicio</a> y <a
                        href="#" class="underline">política de privacidad</a>. Podrás cambiar la configuración de las
                    notificaciones de los correos electrónicos de marketing en tu cuenta CartagenaXplore.
                </p>
            @break

            @case(2)
                <h1 class="text-2xl font-bold text-center text-gray-900 mb-3">Crear su contraseña</h1>
                <h1 class="text-center pb-2">Correo electrónico</h1>

                <div class="mb-4">
                    <label for="password" class="sr-only">Contraseña</label>
                    <input wire:model="password" type="password" id="password"
                        class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                        placeholder="Contraseña">
                </div>

                <div class="w-full bg-gray-200 h-1 rounded-full mb-2">
                    <div class="bg-green-500 h-1 rounded-full"></div>
                </div>
                <p class="text-sm text-gray-600 mb-4">Refuerza la contraseña.</p>
                <p class="text-xs text-gray-500 mb-6">
                    La contraseña debe contener un mínimo de 8 caracteres, letras mayúsculas y minúsculas, y símbolos. Nunca
                    reutilices contraseñas antiguas.
                </p>

                <button wire:click="siguiente2"
                    class="w-full bg-orange-500 text-white p-2 rounded-3xl font-semibold hover:bg-orange-600 transition duration-200">
                    Crear contraseña
                </button>

                <p class="text-center text-sm text-gray-600 mt-4">
                    ¿Ya tienes cuenta? <a href="#" class="text-orange-500 font-semibold">Iniciar sesión</a>
                </p>
            @break

            @case(3)
                <h1 class="text-2xl font-bold text-center text-gray-900 mb-3">Crear su contraseña</h1>
                <h1 class="text-center pb-2">Correo electrónico</h1>

                <div>
                    <input wire:model="text" type="text"
                        class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 mb-4"
                        placeholder="Nombre completo">
                    <input wire:model="text" type="text"
                        class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 mb-4"
                        placeholder="País">
                    <input wire:model="" type="date"
                        class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 mb-4"
                        placeholder="Fecha de nacimiento">
                </div>

                <button wire:click="siguiente2"
                    class="w-full bg-orange-500 text-white p-2 rounded-3xl font-semibold hover:bg-orange-600 transition duration-200">
                    Continuar
                </button>

                <p class="text-center text-sm text-gray-600 mt-4">
                    ¿Ya tienes cuenta? <a href="#" class="text-orange-500 font-semibold">Iniciar sesión</a>
                </p>
            @break

            @default
        @endswitch
    </div>
</div>
