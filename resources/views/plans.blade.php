<x-app-layout>
    <div>
        <div class="bg-body-bg6  bg-cover bg-start w-full h-[55rem] flex flex-col items-center justify-center ">
            <div class=" absolute bg-opacity-25 bg-black z-10 w-full h-[55rem]">
            </div>
            <div class="z-20">
                <h1 class="text-center text-white text-9xl  font-semibold leading-tight">Tu plan, tu estilo </h1>
                <h2 class="text-center text-white text-4xl  font-semibold leading-tight">Elige, organiza y disfruta de tu
                    proxima aventura </h2>
            </div>
        </div>
        <div class="px-36 py-20">
            <div class="px-20 py-16">
                <h1 class="lg:text-6xl md:text-4xl font-semibold mb-20">Planes diseñados</h1>
                <livewire:plans.organize />
            </div>
        </div>
        <livewire:footer />
        <button id="scrollTopButton"
        class="fixed bottom-4 right-4 hidden p-3 bg-orange-600 text-white rounded-full shadow-md hover:bg-orange-700">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5"
            stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
        </svg>
    </button>

    <script>
        const scrollTopButton = document.getElementById('scrollTopButton');
        window.onscroll = function() {
            if (window.scrollY > 100) {
                scrollTopButton.classList.remove('hidden');
            } else {
                scrollTopButton.classList.add('hidden');
            }
        };
        scrollTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
    </div>
</x-app-layout>
