@props(['id', 'maxWidth', 'type' => 'center', 'event' => null])

@php
    $modalId = $id ?? md5($attributes->wire('model'));

    $maxWidth = [
        'sm' => 'sm:max-w-sm',
        'md' => 'sm:max-w-md',
        'lg' => 'sm:max-w-lg',
        'xl' => 'sm:max-w-xl',
        '2xl' => 'sm:max-w-2xl',
    ][$maxWidth ?? '2xl'];

    $type = in_array($type, ['center', 'aside-right', 'aside-left']) ? $type : 'center';

    $showText = $id ? 'false' : "";
@endphp

<div
    x-data="{
        show: @if ($id) false @else @entangle($attributes->wire('model')).live @endif,
        focusables() {
            // All focusable element types...
            let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'

            return [...$el.querySelectorAll(selector)]
                // All non-disabled elements...
                .filter(el => ! el.hasAttribute('disabled'))
        },
        firstFocusable() { return this.focusables()[0] },
        lastFocusable() { return this.focusables().slice(-1)[0] },
        nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
        prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
        nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
        prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) -1 },
    }"
    x-init="$watch('show', value => {
        if (value) {
            document.body.classList.add('overflow-y-hidden');
            {{ $attributes->has('focusable') ? 'setTimeout(() => firstFocusable().focus(), 100)' : '' }}
        } else {
            document.body.classList.remove('overflow-y-hidden');
        }
    })"
    @if ($event) x-on:{{ $event }}.window="show = !show" @endif
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false"
    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
    x-on:keydown.shift.tab.prevent="prevFocusable().focus()"
    x-show="show"
    id="{{ $modalId }}"
    class="fixed pt-indent inset-0 overflow-y-auto px-indent-half z-modal-backdrop"
    style="display: none;"
>
    <div x-show="show" class="modal-backdrop transform"
         x-on:click="show = false"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
    </div>

    @switch($type)
        @case('aside-right')
            <div x-show="show" class="aside-modal right-0 transform w-full xs:w-modal-aside overflow-auto beautify-scrollbar"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-x-modal-aside"
                 x-transition:enter-end="opacity-100 translate-x-0"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-x-0"
                 x-transition:leave-end="opacity-0 translate-x-modal-aside">
                {{ $slot }}
            </div>
            @break

        @case('aside-left')
            <div x-show="show" class="aside-modal left-0 transform w-full xs:w-modal-aside overflow-auto beautify-scrollbar"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 -translate-x-modal-aside"
                 x-transition:enter-end="opacity-100 translate-x-0"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-x-0"
                 x-transition:leave-end="opacity-0 -translate-x-modal-aside">
                {{ $slot }}
            </div>
            @break

        @default
            <div x-show="show" class="mx-auto my-indent modal transform w-full {{ $maxWidth }} overflow-auto beautify-scrollbar"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 sm:-translate-y-indent-double"
                 x-transition:enter-end="opacity-100 sm:translate-y-0"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 sm:scale-100"
                 x-transition:leave-end="opacity-0 sm:scale-0">
                {{ $slot }}
            </div>
            @break
    @endswitch
</div>
