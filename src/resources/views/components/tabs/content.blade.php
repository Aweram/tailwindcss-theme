@props(['name' => ''])
<div class="mb-indent" style="display: none" x-show="show === '{{ $name }}'">
    <x-tt::h3 class="mb-indent">{{ $title }}</x-tt::h3>

    {{ $slot }}
</div>
