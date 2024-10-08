<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 fixed w-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-24 items-center">
            <div class="flex items-center">

                <div class="bg-black rounded-full w-10 h-10 flex justify-center items-center">
                    <span class="text-white text-xs font-bold">Logo</span>
                </div>
                <h2 class="ml-4 text-lg font-bold text-orange-500">CartagenaXplore</h2>
            </div>


            <div class="hidden sm:flex space-x-8">
                <a href="/" class="hover:text-orange-500 relative group">Inicio
                    <span class="block h-0.5 bg-orange-500 absolute bottom-0 left-0 w-0 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('services') }}" class="hover:text-orange-500 relative group">Servicios
                    <span class="block h-0.5 bg-orange-500 absolute bottom-0 left-0 w-0 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/" class="hover:text-orange-500 relative group">Conócenos
                    <span class="block h-0.5 bg-orange-500 absolute bottom-0 left-0 w-0 group-hover:w-full transition-all duration-300"></span>
                </a>
            </div>


            <div class="flex items-center space-x-2">
                <a href="{{ route('login') }}" class="focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 hover:text-orange-500">Inicia Sesion</a>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#666666">
                    <path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/>
                </svg>
            </div>
        </div>
    </div>
</nav>
