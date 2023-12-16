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

<li class="text-sm font-normal">
    <a href="{{ $href }}" class="{{ $linkClass }}">
        @isset($ico)
            <span class="mr-indent-half">{{ $ico }}</span>
        @else
            <span class="mr-indent-half w-[18px] h-[18px]"></span>
        @endisset
        <span class="">{{ $slot }}</span>

        @if ($hasChildren)
            <span class="w-[16px] h-[16px] ml-auto">
                <x-tt::ico.arrow-right class="text-secondary" />
            </span>
        @endif
    </a>
    @if ($hasChildren)
        <ul class="space-y-1 my-1">
            {{ $children }}
        </ul>
    @endif
</li>
