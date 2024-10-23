<div class="flex items-center">
    @for ($i = 1; $i <= 5; $i++)
        <svg  xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 cursor-pointer {{ $i <= $rating ? 'text-yellow-500' : 'text-gray-400' }}" fill="{{ $i <= $rating ? 'currentColor' : 'none' }}" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354l2.847 5.751 6.351.922-4.6 4.48 1.085 6.327L12 18.6l-5.683 3.017 1.085-6.327-4.6-4.48 6.351-.922L12 4.354z" />
        </svg>
    @endfor
</div>
