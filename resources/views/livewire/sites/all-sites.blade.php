
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
    @foreach ($sites as $site)
        <a href="{{ route('siteInfo', $site->id) }}" wire:navigate class="w-full max-w-sm h-auto rounded-lg shadow-lg overflow-hidden group block">
            <div class="overflow-hidden">
                <img src="{{ asset($site->url_img)}}" alt="."
                    class="w-full h-80 object-cover rounded-lg transform transition duration-500 group-hover:scale-110">
            </div>
            <div class="p-4">
                <h3 class="text-3xl pb-3 font-bold">{{$site->name}}</h3>
                <p class="text-gray-500 text-xl">
                    {{$site->eslogan}}</p></p>
            </div>
        </a>
    @endforeach
</div>
