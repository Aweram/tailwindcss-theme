@props([
    "active" => false,
    "href" => '#',
])

@php
    $default = "p-indent-half flex items-center rounded-md";
    $activeClass = "text-dark-hover bg-light";
    $hoverClass = "hover:text-dark-hover hover:bg-light";
    $linkClass = implode(" ", [$default, $hoverClass, $active ? $activeClass : 'text-dark']);

    $hasChildren = isset($children);
@endphp

@if ($hasChildren)
    <li class="text-sm font-normal" x-data="{ expanded: {{ $active ? 'true' : 'false' }}, activated: {{ $active ? 'true' : 'false' }} }">
        <a href="#" class="{{ $linkClass }}"
           :class="{ 'text-dark-hover bg-light': expanded || activated }"
           @click.prevent="expanded = ! expanded">
            @isset($ico)
                <span class="mr-indent-half">{{ $ico }}</span>
            @else
                <span class="mr-indent-half w-[18px] h-[18px]"></span>
            @endisset
            <span class="">{{ $slot }}</span>

            <span class="w-[16px] h-[16px] ml-auto">
                <svg viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg" width="10" height="14" class="text-secondary transform transition-all" :class="{'rotate-90': expanded}">
                    <path d="M8.76514 7.56469C9.07764 7.25219 9.07764 6.74469 8.76514 6.43219L3.96514 1.63219C3.65264 1.31969 3.14514 1.31969 2.83264 1.63219C2.52014 1.94469 2.52014 2.45219 2.83264 2.76469L7.06764 6.99969L2.83514 11.2347C2.52264 11.5472 2.52264 12.0547 2.83514 12.3672C3.14764 12.6797 3.65514 12.6797 3.96764 12.3672L8.76764 7.56719L8.76514 7.56469Z" fill="currentColor"/>
                </svg>
            </span>
        </a>

        <ul class="space-y-1 my-1"
            x-show="expanded"
            x-collapse
            @if (!$active) style="display: none" @endif>
            {{ $children }}
        </ul>
    </li>
@else
    <li class="text-sm font-normal">
        <a href="{{ $href }}" class="{{ $linkClass }}">
            @isset($ico)
                <span class="mr-indent-half">{{ $ico }}</span>
            @else
                <span class="mr-indent-half w-[18px] h-[18px]"></span>
            @endisset
            <span class="">{{ $slot }}</span>
        </a>
    </li>
@endif
