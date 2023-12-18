@if (session('warning'))
    <div class="font-semibold text-sm text-warning p-indent-half rounded-lg bg-warning/25 flex justify-between items-center" x-data="{}">
        <span>{{ session('warning') }}</span>
        <button type="button" class="px-indent-half" @click="$root.remove()">
            <x-tt::ico.cross class="text-dark hover:text-dark-hover" />
        </button>
    </div>
@endif
