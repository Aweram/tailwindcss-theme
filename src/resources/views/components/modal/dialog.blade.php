@props(['id' => null, 'maxWidth' => null, 'event' => null])

<x-tt::modal :id="$id" :event="$event" :maxWidth="$maxWidth" {{ $attributes }}>
    @isset($title)
        <div class="text-base px-indent py-indent-half bg-light flex justify-between items-center">
            {{ $title }}
            <button type="button" x-on:click="show = false" class="focus:ring-0 group">
                <x-tt::ico.cross class="transition-colors duration-300 ease-in-out text-secondary hover:text-dark" width="12" height="12" />
            </button>
        </div>
    @endisset

    <div class="p-indent text-sm">
        {{ $content }}
    </div>

    @isset($footer)
        <div class="flex flex-row justify-end p-indent bg-light text-right text-sm border-t border-secondary">
            {{ $footer }}
        </div>
    @endisset
</x-tt::modal>
