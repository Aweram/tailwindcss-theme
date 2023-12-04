<div {{ $attributes->merge(['class' => 'relative']) }}
     x-data="{ open: false }"
     @click.away="open=false"
     @click.stop="open=false">
    <div @click.stop="open = !open" class="inline-block">
        @isset($button)
            {{ $button }}
        @endisset
        @isset($text)
            <button type="button" class="inline-flex items-center text-dark hover:text-dark/75">
                {{ $text }}
                <x-tt::ico.arrow-down class="ml-2 -mr-0.5" />
            </button>
        @endisset
    </div>

    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
         class="dropdown-menu"
         style="display: none" @click="open=false">
        @isset($content)
            {{ $content }}
        @endisset
    </div>
</div>
