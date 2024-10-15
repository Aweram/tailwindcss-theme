@props(['name' => ''])
<li>
    <button type="button" class="w-full px-indent py-indent-half text-left hover:bg-secondary/20 text-nowrap mb-2.5"
            @click="show = '{{ $name }}'"
            :class="{ 'bg-secondary/20': show === '{{ $name }}', 'bg-white': show !== '{{ $name }}' }">
        {{ $slot }}
    </button>
</li>
