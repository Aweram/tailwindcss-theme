@if (session('warning'))
    <div class="font-semibold text-sm text-warning p-indent-half rounded-lg bg-warning/25">
        {{ session('warning') }}
    </div>
@endif
