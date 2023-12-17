@if (session('success'))
    <div class="font-semibold text-sm text-success p-indent-half rounded-lg bg-success/25">
        {{ session('success') }}
    </div>
@endif
