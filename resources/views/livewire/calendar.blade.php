<div>
    @switch($page)
        @case(1)
            <div class="flex flex-col lg:flex-row pt-24">
                <div class="w-full lg:w-3/4 p-8 overflow-y-auto">
                    @switch($edit)
                        @case(1)
                            <h1 class="text-2xl md:text-3xl font-semibold mb-6">Actividades en el plan</h1>
                            <div
                                class="h-[24rem] md:h-[32rem] overflow-y-auto space-y-6 p-4 md:p-6 border border-gray-300 bg-gray-100 rounded-lg">
                                @foreach ($activities as $activity)
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center bg-white p-6 md:p-8 rounded-lg shadow border border-gray-200">
                                        <div class="w-full md:w-24 h-24 bg-gray-300 rounded-lg flex-shrink-0"></div>
                                        <div class="ml-0 md:ml-8 flex-grow mt-4 md:mt-0">
                                            <h3 class="text-xl md:text-2xl font-bold">{{ $activity->activity->title }}{{ $idActividad }}
                                            </h3>
                                            <p class="text-lg md:text-xl text-gray-700">{{ $activity->activity->information_below }}</p>
                                            <div class="flex items-center text-lg md:text-xl text-gray-500 mt-4">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="h-6 w-6 md:h-8 md:w-8 cursor-pointer {{ $i <= $activity->activity->rating ? 'text-yellow-500' : 'text-gray-400' }}"
                                                        fill="{{ $i <= $activity->rating ? 'currentColor' : 'none' }}"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M12 4.354l2.847 5.751 6.351.922-4.6 4.48 1.085 6.327L12 18.6l-5.683 3.017 1.085-6.327-4.6-4.48 6.351-.922L12 4.354z" />
                                                    </svg>
                                                @endfor
                                            </div>
                                        </div>
                                        <div class="mt-4 md:mt-0">
                                            <input type="date" id="fecha($activity->activity->id)"
                                                wire:model="dateCalendar.{{ $activity->activity->id }}"
                                                min="{{ now()->toDateString() }}" class="p-2 border rounded">
                                        </div>
                                        <button wire:click="removeActivity({{ $activity->activity_id }})"
                                            class="ml-8 mt-4 md:mt-0 text-red-500">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960"
                                                    width="30px" fill="#EA3323">
                                                    <path
                                                        d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        @break

                        @case(2)
                            <h1 class="text-2xl md:text-3xl font-semibold mt-6 md:mt-12 mb-6">Actividades extras</h1>
                            <div
                                class="h-[24rem] md:h-[32rem] overflow-y-auto space-y-6 p-4 md:p-6 border border-gray-300 bg-gray-100 rounded-lg">
                                @foreach ($moreActivities as $activity)
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center bg-white p-6 md:p-8 rounded-lg shadow border border-gray-200">
                                        <div class="w-full md:w-24 h-24 bg-gray-300 rounded-lg flex-shrink-0"></div>
                                        <div class="ml-0 md:ml-8 flex-grow mt-4 md:mt-0">
                                            <h3 class="text-xl md:text-2xl font-bold">{{ $activity->title }}</h3>
                                            <p class="text-lg md:text-xl text-gray-700">{{ $activity->information_below }}</p>
                                            <div class="flex items-center text-lg md:text-xl text-gray-500 mt-4">
                                                <span class="material-icons mr-3">schedule</span>
                                            </div>
                                        </div>
                                        <button wire:click="addActivity({{ $activity->id }})"
                                            class="ml-8 mt-4 md:mt-0 text-green-500 text-3xl">
                                            <span class="material-icons"><svg xmlns="http://www.w3.org/2000/svg" height="30px"
                                                    viewBox="0 -960 960 960" width="30px" fill="#75FB4C">
                                                    <path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z" />
                                                </svg></span>
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        @break

                        @default
                    @endswitch
                </div>
                <div
                    class="w-full lg:w-1/4 h-[30rem] md:h-[50rem] p-8 bg-gradient-to-b from-orange-500 to-orange-300 text-white rounded-lg shadow-lg overflow-y-auto">
                    <div class="mb-8">
                        <img src="{{ asset($activo->url_img) }}" alt="Plan image" class="rounded-lg w-full h-48 object-cover">
                    </div>
                    <h2 class="text-xl md:text-2xl font-bold mb-4">{{ $activo->name }}</h2>
                    <p class="text-lg md:text-xl mb-6">Lorem Ipsum is simply dummy text of the printing and...</p>
                    @switch($edit)
                        @case(1)
                            <div
                                class="bg-gray-900 text-white px-8 py-4 rounded-full mb-6 w-full h-12 text-lg flex justify-center items-center">
                                <button wire:click="nextEdit">Añadir más evento</button>
                            </div>
                            <div
                                class="bg-white text-gray-800 px-8 py-4 rounded-full mb-6 w-full h-12 text-lg flex justify-center items-center">
                                <button wire:click="next">Cronograma</button>
                            </div>
                            <div
                                class="border-2 border-white mt-12 md:mt-32 text-white px-8 py-4 rounded-full mb-6 w-full h-12 text-lg flex justify-center items-center">
                                <button>Consultar mis planes</button>
                            </div>
                        @break

                        @case(2)
                            <button wire:click="backEdit"
                                class="bg-white text-gray-800 px-8 py-4 rounded-full mb-6 text-lg md:text-2xl">Volver a ver actividades
                                del plan</button>
                        @break

                        @default
                    @endswitch
                </div>
            </div>
        @break

        @case(2)
            <div class=" ">
                <livewire:plans.calendar :idPlan="$idPlan" />
            </div>
            <button wire:click="back">VOLVER</button>
        @break

        @default
    @endswitch
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('input[type="date"]').forEach(input => {
                input.addEventListener('change', function() {
                    const idActivity = input.getAttribute('data-id-activity');

                    Livewire.emit('procesarFecha', input.value, idActivity);
                });
            });

            const today = new Date().toISOString().split('T')[0];
            document.getElementById('fecha').setAttribute('min', today);
        });
    </script>


    <script>
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('fecha').setAttribute('min', today);
    </script>

</div>
