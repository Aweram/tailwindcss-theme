<div>
    <h4 class="text-2xl mb-indent">Dialog modals</h4>
    <div class="flex flex-col space-y-indent-half">
        <button type="button" class="btn btn-danger" wire:click="showDelete">Confirm</button>
        <button type="button" class="btn btn-danger" wire:click="showCustomDelete">Confirm custom</button>
        <button type="button" class="btn btn-primary" wire:click="showDialog">Dialog small</button>
    </div>


    <x-tt::modal.confirm wire:model="displayDelete" />

    <x-tt::modal.confirm wire:model="displayCustomDelete" closeAction="closeCustomDelete" confirmAction="confirmCustomDelete">
        <x-slot name="title">Custom title</x-slot>
        <x-slot name="text">Custom confirm text</x-slot>
        <x-slot name="closeText">Custom close</x-slot>
        <x-slot name="confirmText">Custom confirm</x-slot>
    </x-tt::modal.confirm>

    <x-tt::modal.dialog wire:model="displayDialog" maxWidth="sm">
        <x-slot name="title">Dialog title</x-slot>
        <x-slot name="content">
            <p>Simple dialog content</p>
        </x-slot>
        <x-slot name="footer">
            <p>Simple dialog footer</p>
        </x-slot>
    </x-tt::modal.dialog>

</div>
