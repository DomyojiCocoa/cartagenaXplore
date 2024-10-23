<div class="max-w-6xl mx-auto p-6 w-full lg:w-9/12">

    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold">
        {{$activity->title}}
    </h1>


    <div class="flex flex-col md:flex-row items-start md:items-center mt-4 space-y-4 md:space-y-0">

        <div class="flex items-center">
            @for ($i = 1; $i <= 5; $i++)
                <svg  xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 {{ $i <= $activity->rating ? 'text-yellow-500' : 'text-gray-400' }}" fill="{{ $i <= $activity->rating ? 'currentColor' : 'none' }}" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354l2.847 5.751 6.351.922-4.6 4.48 1.085 6.327L12 18.6l-5.683 3.017 1.085-6.327-4.6-4.48 6.351-.922L12 4.354z" />
                </svg>
            @endfor

        </div>
        <h3 class="font-bold px-4">{{$activity->rating}} / 5</h3>
        <h3 class="font-bold px-1">{{$activityCategory->name}}</h3>



        <span class="ml-0 md:ml-4 text-base sm:text-lg flex items-center">
            <i class="fas fa-clock mr-2"></i>Duración 3 horas
        </span>


        <span class="ml-0 md:ml-4 text-base sm:text-lg flex items-center">
            <i class="fas fa-heart mr-2"></i>Agregar a favoritos
        </span>
    </div>


    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-orange-600 mt-8">Tu recorrido</h2>


    <div class="mt-4 flex flex-col md:flex-row">
        <div class="flex items-center">
            <h3 class="text-base sm:text-lg font-bold">Qué realizarás</h3>
        </div>
        <div class="text-sm sm:text-base pl-0 md:pl-20">
            <ul class="list-disc list-inside mt-2 marker:text-orange-500">
                @foreach ($activityTodo as $todo)
                    <li>{{ $todo->info }}</li>
                @endforeach
            </ul>
        </div>
    </div>


    <hr class="my-6" />


    <div class="mt-4 flex flex-col md:flex-row">
        <div class="flex items-center">
            <h3 class="text-base sm:text-lg font-bold">Qué abarca</h3>
        </div>
        <div class="text-sm sm:text-base pl-0 md:pl-20">
            <ul class="list-disc list-inside mt-2 marker:text-orange-500">
                @foreach ($activityWhatCover as $cover)
                    <li>{{ $cover->info}}</li>
                @endforeach
            </ul>
        </div>
    </div>


    <hr class="my-6" />

</div>
