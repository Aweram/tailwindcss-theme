<div>
    <h4 class="text-2xl">Modals</h4>
    <div class="flex flex-col space-y-indent-half">
        <button type="button" class="btn btn-danger" wire:click="showDelete">Confirm</button>
        <button type="button" class="btn btn-danger" wire:click="showCustomDelete">Confirm custom</button>
    </div>


    <x-tt::modal.confirm wire:model="displayDelete" />

    <x-tt::modal.confirm wire:model="displayCustomDelete" closeAction="closeCustomDelete" confirmAction="confirmCustomDelete">
        <x-slot name="text">Custom confirm text</x-slot>
        <x-slot name="closeText">Custom close</x-slot>
        <x-slot name="confirmText">Custom confirm</x-slot>
    </x-tt::modal.confirm>

</div>
