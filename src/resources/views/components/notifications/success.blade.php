@props(["prefix" => ""])
@if (session($prefix . 'success'))
    <div class="font-semibold text-sm text-success p-indent-half rounded-lg bg-success/25 flex justify-between items-center" x-data="{}">
        <span>{{ session($prefix . 'success') }}</span>
        <button type="button" class="px-indent-half" @click="$root.remove()">
            <x-tt::ico.cross class="text-dark hover:text-dark-hover" />
        </button>
    </div>
@endif
