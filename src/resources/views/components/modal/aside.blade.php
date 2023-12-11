@props(['id' => null])

<x-tt::modal :id="$id" type="aside" {{ $attributes }}>
    @isset($title)
        <div class="text-lg font-medium px-indent py-indent flex justify-between items-center">
            {{ $title }}
            <button type="button" x-on:click="show = false" class="focus:ring-0 group">
                <x-tt::ico.cross class="transition-colors duration-300 ease-in-out text-secondary hover:text-dark" width="14" height="14" />
            </button>
        </div>
    @endisset

    <div class="p-indent">
        {{ $content }}
    </div>
</x-tt::modal>
