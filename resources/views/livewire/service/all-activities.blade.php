<div class="">
    <div class="p-4 ml-1">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($activities as $activity)
                <a href="{{ route('activityInfo', $activity->id)}}">
                    <div class="w-full border rounded-lg shadow-lg relative group">
                        <div class="card shadow-md w-full h-[20rem] group gap-[1.3em] rounded-sm relative flex justify-end flex-col z-[1] overflow-hidden">
                            <div class="absolute top-0 left-0 h-full w-full">
                                <div class="w-full h-full transition-transform duration-1000 transform group-hover:scale-110" wire:key="site-{{ $activity->id }}">
                                    <img class="w-full h-full object-cover" src="{{ asset($activity->url_img) }}?v={{ now()->timestamp }}" loading="lazy">
                                </div>

                            </div>
                            <div class="container bg-black bg-opacity-35 hover:bg-opacity-85 z-[2] relative font-nunito flex flex-col p-[1.5rem] gap-[0.5rem]">
                                <div class="h-fit w-full">
                                    <h1 class="text-[1.3rem] font-semibold text-white">
                                        {{ $activity->title }}
                                    </h1>
                                </div>
                                <p class="font-nunito block text-blue-50 font-light relative h-[0em] group-hover:h-[6em] leading-[1.2em] duration-500 overflow-hidden">
                                    {{ $activity->information_below }}
                                </p>
                                <div class="flex items-center">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 cursor-pointer {{ $i <= $activity->rating ? 'text-yellow-500' : 'text-gray-400' }}" fill="{{ $i <= $activity->rating ? 'currentColor' : 'none' }}" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354l2.847 5.751 6.351.922-4.6 4.48 1.085 6.327L12 18.6l-5.683 3.017 1.085-6.327-4.6-4.48 6.351-.922L12 4.354z" />
                                        </svg>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    {{ $activities->links() }}
</div>
