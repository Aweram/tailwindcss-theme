@if (session('error'))
    <div class="font-semibold text-sm text-danger p-indent-half rounded-lg bg-danger/25">
        {{ session('error') }}
    </div>
@endif
