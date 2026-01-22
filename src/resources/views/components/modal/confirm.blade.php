@props([
    'id' => null,
    'maxWidth' => "md",
    'closeAction' => 'closeDelete',
    'confirmAction' => 'confirmDelete'
])

<x-tt::modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="text-base px-indent py-indent-half bg-light flex justify-between items-center">
        {{ $title ?? __("Delete item") }}
        <button type="button" x-on:click="show = false" class="focus:ring-0 group cursor-pointer text-body/40 hover:text-body">
            <x-tt::ico.cross class="transition-colors duration-300 ease-in-out" />
        </button>
    </div>

    <div class="p-indent text-sm">
        <div class="text-center mb-indent">
            <h3>{{ __("Are you shure?") }}</h3>
            <p>{{ $text ?? __("It will be impossible to restore the item") }}</p>
        </div>
        <div class="flex justify-around">
            <button type="button" class="btn btn-secondary" wire:click="{{ $closeAction }}">
                {{ $closeText ?? __("Close") }}
            </button>
            <button type="button" class="btn btn-danger" wire:click="{{ $confirmAction }}">
                {{ $confirmText ?? __("Confirm") }}
            </button>
        </div>
    </div>
</x-tt::modal>
