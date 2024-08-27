<x-tt::modal.dialog wire:model="displayDescription">
    <x-slot name="title">Описание</x-slot>
    <x-slot name="content">
        <div class="prose prose-sm">
            {!! \Illuminate\Support\Str::markdown($description) !!}
        </div>
    </x-slot>
</x-tt::modal.dialog>
