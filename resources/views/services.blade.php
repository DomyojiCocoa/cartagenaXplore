<x-app-layout>
    <div class="flex pt-28 bg-white px-20">
        <!-- Barra lateral izquierda -->
        <livewire:service.all-activities />

        <!-- Contenido de la derecha -->
        <div class="w-3/4 p-4 ml-2 border-l border-black">
            <!-- Barra de búsqueda y filtro -->
            <div class="flex justify-between items-center mb-4">
                <div class="relative w-64 h-	">
                    <input type="text" placeholder="Nombre o palabra clave"
                        class="border border-gray-300 p-2 pl-10 rounded-2xl w-full" />
                    <!-- Ícono de la lupa -->
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#666666" class="absolute left-2 top-2 pointer-events-none">
                        <path
                            d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                    </svg>
                </div>
                <h2>10 resultados</h2>
                <select class="border-0 ring-white">
                    <option>Ordenar clima por: Climas variados</option>
                    <!-- Más opciones -->
                </select>
            </div>


            <div class="grid grid-cols-3 gap-4 ">
                <div class="w-full bg-zinc-700 border border-gray-200 rounded-lg shadow-lg relative group">
                    <div class="card shadow-md w-full h-[443px] group gap-[1.3em] rounded-sm relative flex justify-end flex-col z-[1] overflow-hidden">
                        <div class="absolute top-0 left-0 h-full w-full bg-gray">
                            <div class="group-hover:scale-110 w-full h-60 duration-500">
                                <img class=" object-center rounded " src="https://i.pinimg.com/736x/2a/88/7b/2a887b44e0680105a850832c48d16582.jpg">
                            </div>
                        </div>
                        <div class="container bg-black bg-opacity-35 hover:bg-opacity-85 z-[2] relative font-nunito flex flex-col p-[1.5em] gap-[0.5em]">
                            <div class="h-fit w-full">
                                <h1 class="text-2xl font-semibold text-white">
                                    TITULO
                                </h1>
                            </div>
                            <p
                                class="font-nunito block text-blue-50 text-blackfont-light relative h-[0em] group-hover:h-[6em] leading-[1.2em] duration-500 overflow-hidden">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti facere saepe vitae nobis molestias suscipit assumenda repudiandae quibusdam natus, earum nam ipsam autem, sequi nihil? Numquam officia dolore dolorem eveniet.
                            </p>
                            <div class="flex items-center">
                                <!-- Estrellas -->
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#F1C40F">
                                    <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#F1C40F">
                                    <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#F1C40F">
                                    <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#F1C40F">
                                    <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#F1C40F">
                                    <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full bg-zinc-700 border border-gray-200 rounded-lg shadow-lg relative group">
                    <!-- Imagen -->
                    <div class="card shadow-md w-full h-[443px] group gap-[1.3em] rounded-sm relative flex justify-end flex-col z-[1] overflow-hidden">
                        <div class="absolute top-0 left-0 h-full w-full bg-gray">
                            <div class="group-hover:scale-110 w-full h-60 duration-500">
                                <img class=" object-center rounded " src="https://i.pinimg.com/736x/3c/d4/a3/3cd4a3dc72138c399a3cc61195a2647c.jpg">
                            </div>
                        </div>
                        <div class="container bg-black bg-opacity-35 hover:bg-opacity-85 z-[2] relative font-nunito flex flex-col p-[1.5em] gap-[0.5em]">
                            <div class="h-fit w-full">
                                <h1 class="text-2xl font-semibold text-white">
                                    TITULO
                                </h1>
                            </div>
                            <p
                                class="font-nunito block text-blue-50 text-blackfont-light relative h-[0em] group-hover:h-[6em] leading-[1.2em] duration-500 overflow-hidden">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti facere saepe vitae nobis molestias suscipit assumenda repudiandae quibusdam natus, earum nam ipsam autem, sequi nihil? Numquam officia dolore dolorem eveniet.
                            </p>
                            <div class="flex items-center">
                                <!-- Estrellas -->
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#F1C40F">
                                    <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#F1C40F">
                                    <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#F1C40F">
                                    <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#F1C40F">
                                    <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#F1C40F">
                                    <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full bg-zinc-700 border border-gray-200 rounded-lg shadow-lg relative group">
                    <!-- Imagen -->
                    <div class="card shadow-md w-full h-[443px] group gap-[1.3em] rounded-sm relative flex justify-end flex-col z-[1] overflow-hidden">
                        <div class="absolute top-0 left-0 h-full w-full bg-gray">
                            <div class="group-hover:scale-110 w-full h-60 duration-500">
                                <img class="  rounded " src="https://i.pinimg.com/736x/d9/75/71/d97571ce461c5e97be3d4eb3475226cb.jpg">
                            </div>
                        </div>
                        <div class="container bg-black bg-opacity-35 hover:bg-opacity-85 z-[2] relative font-nunito flex flex-col p-[1.5em] gap-[0.5em]">
                            <div class="h-fit w-full">
                                <h1 class="text-2xl font-semibold text-white">
                                    TITULO
                                </h1>
                            </div>
                            <p
                                class="font-nunito block text-blue-50 text-blackfont-light relative h-[0em] group-hover:h-[6em] leading-[1.2em] duration-500 overflow-hidden">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti facere saepe vitae nobis molestias suscipit assumenda repudiandae quibusdam natus, earum nam ipsam autem, sequi nihil? Numquam officia dolore dolorem eveniet.
                            </p>
                            <div class="flex items-center">
                                <!-- Estrellas -->
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#F1C40F">
                                    <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#F1C40F">
                                    <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#F1C40F">
                                    <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#F1C40F">
                                    <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="16px" fill="#F1C40F">
                                    <path d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
