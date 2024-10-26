<div class="flex h-screen">

    <div class="w-1/4 p-8 bg-gradient-to-b from-gray-800 to-gray-600 text-white rounded-lg shadow-lg overflow-y-auto">
        <div class="mb-8">
            <img src="/path/to/your/image.jpg" alt="Plan image" class="rounded-lg w-full h-48 object-cover">
        </div>
        <h2 class="text-4xl font-bold mb-4">Título del plan</h2>
        <p class="text-2xl mb-6">Lorem Ipsum is simply dummy text of the printing and...</p>
        <button class="bg-white text-gray-800 px-8 py-4 rounded-full mb-6 text-2xl">Añadir más evento</button>
    </div>


    <div class="w-3/4 p-8 overflow-y-auto">
        


        <h1 class="text-3xl font-semibold mb-6">Actividades en el plan</h1>
        <div class="h-[32rem] overflow-y-auto space-y-6 p-6 border border-gray-300 bg-gray-100 rounded-lg">
            @foreach ($activities as $activity)
                <div class="flex items-center bg-white p-8 rounded-lg shadow border border-gray-200">
                    <div class="w-24 h-24 bg-gray-300 rounded-lg flex-shrink-0"></div>
                    <div class="ml-8 flex-grow">
                        <h3 class="text-2xl font-bold">{{ $activity->activity->title }}</h3>
                        <p class="text-xl text-gray-700">Lorem Ipsum is the industry's standard dummy text...</p>
                        <div class="flex items-center text-xl text-gray-500 mt-4">
                            <span class="material-icons mr-3">schedule</span> Duración 3 horas
                        </div>
                    </div>
                    <button>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#999999">
                                <path d="M580-240q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Z"/>
                            </svg>
                        </span>
                    </button>
                    <button wire:click="removeActivity({{ $activity->activity_id }})" class="ml-8 text-red-500">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#EA3323">
                                <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                            </svg>
                        </span>
                    </button>

                </div>
            @endforeach
        </div>
        <h1 class="text-3xl font-semibold mt-12 mb-6">Actividades extras</h1>
        <div class="h-[32rem] overflow-y-auto space-y-6 p-6 border border-gray-300 bg-gray-100 rounded-lg">
            @foreach ($moreActivities as $activity)
                <div class="flex items-center bg-white p-8 rounded-lg shadow border border-gray-200">
                    <div class="w-24 h-24 bg-gray-300 rounded-lg flex-shrink-0"></div>
                    <div class="ml-8 flex-grow">
                        <h3 class="text-2xl font-bold">{{ $activity->title }}</h3>
                        <p class="text-xl text-gray-700">Lorem Ipsum is the industry's standard dummy text...</p>
                        <div class="flex items-center text-xl text-gray-500 mt-4">
                            <span class="material-icons mr-3">schedule</span> Duración 3 horas
                        </div>
                    </div>
                    <button wire:click="addActivity({{ $activity->id }})" class="ml-8 text-green-500 text-3xl">
                        <span class="material-icons"><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#75FB4C"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg></span>
                    </button>
                </div>
            @endforeach
        </div>

        <button wire:click="next" class="mt-8 px-8 py-4 bg-blue-600 text-white rounded-lg shadow text-2xl">Ver cronograma</button>
    </div>
</div>



{{-- <button wire:click="removeActivity({{ $activity->activity_id }})">Quitar</button> --}}
