<div class=" mt-10">
    <h1 class="lg:text-6xl md:text-4xl font-semibold mb-20">Opiniones de usuarios</h1>

    @auth
    <div>
        @if (session()->has('message'))
            <div class="text-green-500 mb-4">
                {{ session('message') }}
            </div>
        @endif
    
        <div class="mb-4">
            <textarea 
                wire:model.live="comment"
                placeholder="¿Qué tal te fue?" 
                class="w-full h-28 text-xl border border-gray-500 rounded-3xl">
            </textarea>
            @error('comment') 
                <span class="text-red-500">{{ $message }}</span> 
            @enderror
        </div>
    
        <div class="flex justify-center">
            <button 
                wire:click="submit" 
                class="bg-orange-500 hover:bg-[#c9773e] text-white py-2 px-20 text-xl rounded-3xl font-semibold shadow-md">
                Enviar
            </button>
        </div>
    </div>
    
    @endauth

    @foreach ($comments as $comment)
    <div class="mt-5  border-b border-gray-300 pb-4">
        <div class="flex items-center mb-4">

            <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="#666666">
                <path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
            </svg>


            <div class="ml-4">
                <h1 class="text-2xl font-bold">{{ $comment->user->name }}</h1>
                <p class="text-lg text-orange-500">{{ $comment->user->created_at->format('d M Y') }}</p>
            </div>
        </div>

        <p class="text-xl text-gray-600">{{ $comment->comment }}</p>
    </div>
    @endforeach

</div>

