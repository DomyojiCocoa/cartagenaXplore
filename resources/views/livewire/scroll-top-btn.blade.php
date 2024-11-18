<div>
    <button id="scrollTopButton1"
    class="fixed bottom-4 right-4 hidden p-3 bg-orange-600 text-white rounded-full shadow-md hover:bg-orange-700">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5"
        stroke="currentColor" class="h-6 w-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
    </svg>
</button>

<script>
    document.addEventListener('livewire:navigated', () => {
        const scrollTopButton = document.getElementById('scrollTopButton1');
        window.onscroll = function() {
            scrollTopButton.classList.toggle('hidden', window.scrollY <= 100);
        };
        scrollTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });
</script>
</div>
