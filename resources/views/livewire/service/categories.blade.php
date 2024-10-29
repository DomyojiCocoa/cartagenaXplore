<div class="flex flex-col lg:flex-row justify-center items-center pt-6 bg-white min-h-screen lg:px-18 px-10">
    <div class="flex flex-col lg:flex-row w-full pt-16 bg-white lg:px-10 space-y-8 lg:space-y-0 lg:space-x-8">

        <div class=" rounded-xl w-full lg:w-1/4 p-8 h-full">
            <h2 class="text-3xl lg:text-3xl text-center font-bold mb-6">Tipos de servicios</h2>
            <ul>
                <li class="mb-8">
                    <ul class="ml-6 lg:ml-10 list-disc marker:text-orange-500">
                        <li class="text-black font-semibold text-xl lg:text-2xl">Categorias</li>
                    </ul>
                    <ul class="ml-4 lg:ml-6 mt-4">
                        <li class="mb-4 cursor-pointer hover:bg-gray-100 p-3 rounded-xl text-lg lg:text-xl">
                            Todas las actividades
                        </li>
                        @foreach ($categories as $category)
                        <li class="mb-4 cursor-pointer hover:bg-gray-100 p-3 rounded-xl text-lg lg:text-xl">
                            {{$category->name}}
                        </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
        <div class="bg-white rounded-xl p-4 lg:p-5 w-full flex-grow">
            <livewire:service.all-activities />
        </div>
    </div>
</div>
