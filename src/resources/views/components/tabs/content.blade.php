@props(['name' => ''])
<div class="mb-indent" style="display: none" x-show="show === '{{ $name }}'">
    {{-- TODO: add heading --}}
    <h3 class="text-3xl font-semibold mb-indent">{{ $title }}</h3>

    {{ $slot }}
</div>
