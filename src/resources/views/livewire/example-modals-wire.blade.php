<div>
    <button type="button" class="btn btn-danger" wire:click="showDelete">Delete</button>

    @teleport('body')
        <x-tt::modal.dialog wire:model="dispDelete" max-width="md">
            <x-slot name="title">Delete title</x-slot>
            <x-slot name="content">
                <div class="text-center mb-indent">
                    <h3>{{ __("Are you shure?") }}</h3>
                </div>
                <button type="button" class="btn btn-secondary" wire:click="closeDelete">Close</button>
            </x-slot>
        </x-tt::modal.dialog>
    @endteleport
</div>
