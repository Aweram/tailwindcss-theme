@props(["prefix" => ""])
@if (session('$prefix . info'))
    <div class="font-semibold text-sm text-info p-indent-half rounded-lg bg-info/25 flex justify-between items-center" x-data="{}">
        <span>{{ session($prefix . 'info') }}</span>
        <button type="button" class="px-indent-half" @click="$root.remove()">
            <x-tt::ico.cross class="text-dark hover:text-dark-hover" />
        </button>
    </div>
@endif
