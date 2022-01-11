<div>
    <a class="btn btn-green" wire:click="$set('open',true)"><i class="fas fa-upload"></i></a>
    @if ($other->link_lists)
        <a class="btn btn-red" wire:click="download_lists"><i class="fas fa-download"></i></a>
    @endif
    <x-jet-dialog-modal wire:model="open">
        <x-slot name='title'>
            Cargar
        </x-slot>
        <x-slot name='content'>
            <div class="mb-4">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Listas" />
                    <x-jet-input wire:model="other.lists" type="text" class="block w-full" />
                </div>
            </div>
            <div wire:loading wire:target="file" class="mb-4 bg-red-100 border border-red-400">
                <strong class="font-bold">Archivo cargando!</strong>
                <span class="block sm:inline">Espere un momento hasta que el archivo se haya procesado.</span>
            </div>
            <div>
                <input type="file" wire:model="file" id="{{ $identificador }}">
                <x-jet-input-error for="file" />
            </div>
        </x-slot>
        <x-slot name='footer'>
            <x-jet-secondary-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="save_lists" wire:loading.attr="disabled" class="disabled:opacity-25">
                Guardar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
