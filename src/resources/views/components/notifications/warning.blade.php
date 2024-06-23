@props(["prefix" => ""])
@if (session($prefix . 'warning'))
    <div class="font-semibold text-sm text-warning p-indent-half rounded-lg bg-warning/25 flex justify-between items-center" x-data="{}">
        <span>{{ session($prefix . 'warning') }}</span>
        <button type="button" class="px-indent-half" @click="$root.remove()">
            <x-tt::ico.cross class="text-dark hover:text-dark-hover" />
        </button>
    </div>
@endif
