<div class="max-w-6xl mx-auto p-6 w-full lg:w-9/12">

    <h1 class="text-8xl sm:text-4xl lg:text-7xl font-bold pb-4">
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
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#434343"><path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 27-3 53t-10 51q-14-16-32.5-27T794-418q3-15 4.5-30.5T800-480q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93q51 0 97.5-15t85.5-42q12 17 29.5 30t37.5 20q-51 41-114.5 64T480-80Zm290-160q-21 0-35.5-14.5T720-290q0-21 14.5-35.5T770-340q21 0 35.5 14.5T820-290q0 21-14.5 35.5T770-240Zm-158-52L440-464v-216h80v184l148 148-56 56Z"/></svg>Duración 3 horas
        </span>


        <span class="ml-0 md:ml-4 text-base sm:text-lg flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#434343"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z"/></svg> a favoritos
        </span>
    </div>


    <div class="pt-10 pb-8">
        <h2 class="text-5xl sm:text-3xl lg:text-6xl font-bold text-orange-600 ">Tu recorrido</h2>

    </div>


    <div class="mt-4 flex flex-col md:flex-row lg:text-3xl items-start md:items-center">
        <div class="flex items-center md:items-baseline">
            <h3 class="font-bold">Qué realizarás</h3>
        </div>
        <div class="text-sm lg:text-lg pl-12">
            <ul class="list-disc list-inside mt-2 marker:text-orange-500">
                @foreach ($activityTodo as $todo)
                    <li>{{ $todo->info }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <hr class="my-6" />

    <div class="mt-4 flex flex-col md:flex-row lg:text-3xl items-start md:items-center">
        <div class="flex items-center md:items-baseline">
            <h3 class="font-bold">Qué abarca</h3>
        </div>
        <div class="text-sm lg:text-lg pl-20">
            <ul class="list-disc list-inside mt-2 marker:text-orange-500">
                @foreach ($activityWhatCover as $cover)
                    <li>{{ $cover->info }}</li>
                @endforeach
            </ul>
        </div>
    </div>




    <hr class="my-6" />

</div>
