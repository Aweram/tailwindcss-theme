@props(["url" => null])
<li class="">
    @if ($url)
        <a href="{{ $url }}" class="text-secondary hover:text-body">{{ $slot }}</a>
    @else
        <span>{{ $slot }}</span>
    @endif
</li>
@if ($url)
    <li>
        <div class="w-1.5 h-1.5 bg-secondary rounded-full"></div>
    </li>
@endif
