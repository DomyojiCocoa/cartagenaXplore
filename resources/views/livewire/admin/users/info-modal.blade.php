<div>
    <div>
        <dialog id="user_modal" class="modal" x-data="{ open: @entangle('isOpen') }" x-show="open">
            <div class="modal-box">
                <h3 class="text-lg font-bold">Información de {{ $user->name }}</h3>
                <p class="py-4">Email: {{ $user->email }}</p>
                <p>Estado: {{ $user->estado }}</p>
                <div class="modal-action">
                    <button class="btn" wire:click="closeModal">Cerrar</button>
                </div>
            </div>
        </dialog>
    </div>
</div>
