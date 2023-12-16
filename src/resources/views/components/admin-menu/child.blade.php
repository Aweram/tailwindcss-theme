@props([
    "active" => false,
    "href" => "#",
])

@php
    $default = "p-indent-half flex items-center rounded-md";
    $activeClass = "text-dark-hover bg-light";
    $hoverClass = "hover:text-dark-hover hover:bg-light";
    $linkClass = implode(" ", [$default, $hoverClass, $active ? $activeClass : 'text-dark']);
@endphp

<li class="">
    <a href="{{ $href }}" class="{{ $linkClass }}">
        <x-tt::ico.list-circle class="text-secondary mr-indent-half ml-indent-half" />
        <span>{{ $slot }}</span>
    </a>
</li>
