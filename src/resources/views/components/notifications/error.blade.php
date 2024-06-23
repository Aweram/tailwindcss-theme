@props(["prefix" => ""])
@if (session($prefix . 'error'))
    <div class="font-semibold text-sm text-danger p-indent-half rounded-lg bg-danger/25 flex justify-between items-center" x-data="{}">
        <span>{{ session($prefix . 'error') }}</span>
        <button type="button" class="px-indent-half" @click="$root.remove()">
            <x-tt::ico.cross class="text-dark hover:text-dark-hover" />
        </button>
    </div>
@endif
