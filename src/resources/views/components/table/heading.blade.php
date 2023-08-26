@props([
    "sortable" => null,
    "direction" => null
])

<th {{ $attributes->merge([])->only(['class', 'colspan']) }}>
    @unless ($sortable)
        {{ $slot }}
    @else
        <button type="button" {{ $attributes->except(['class', 'colspan']) }} class="flex w-full items-center justify-between space-x-1 text-left hover:cursor-pointer">
            <span>{{ $slot }}</span>
            @if ($direction == "asc")
                <svg width="10" height="18" viewBox="0 0 14 26">
                    <g stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 19l6 6 6-6" stroke="#5E5873"/>
                        <path d="M13 7L7 1 1 7" stroke="#C6C4D0"/>
                    </g>
                </svg>
            @elseif ($direction == "desc")
                <svg width="10" height="18" viewBox="0 0 14 26">
                    <g stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 19l6 6 6-6" stroke="#C6C4D0"/>
                        <path d="M13 7L7 1 1 7" stroke="#5E5873"/>
                    </g>
                </svg>
            @else
                <svg width="10" height="18" viewBox="0 0 14 26">
                    <g stroke="#C6C4D0" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 19l6 6 6-6M13 7L7 1 1 7"/>
                    </g>
                </svg>
            @endif
        </button>
    @endunless
</th>
