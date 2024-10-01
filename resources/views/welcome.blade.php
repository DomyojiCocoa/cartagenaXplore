<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CartagenaXplore</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <header class="w-full bg-slate-950">
            @if (Route::has('login'))
                <div class="">
                    <div>
                        <h2 class="satoshi text-red-600">CartagenaXplore</h2>
                    </div>
                    <div>
                        <div>
                            <button><a href="">Inicio</a></button>
                        </div>
                        <div>
                            <button><a href="">Actividades</a></button>
                        </div>
                        <div>
                            <button><a href="">Contactanos</a></button>
                        </div>
                    </div>
                    <div>
                        @auth
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-red-600 hover:text-gray-900 ">Inicia sesion</a>
                        @endauth
                    </div>
                </div>
            @endif

        </header>
        <main>
            
        </main>
        <footer>

        </footer>
    </body>
</html>
