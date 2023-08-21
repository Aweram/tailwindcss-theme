<div class="block w-full overflow-x-auto beautify-scrollbar">
    <table {{ $attributes->merge(['class' => 'table-style']) }}>
        @isset($head)
            <thead>{{ $head }}</thead>
        @endisset

        @isset($body)
            <tbody>{{ $body }}</tbody>
        @endisset

        @isset($caption)
            <caption class="table-caption">{{ $caption }}</caption>
        @endisset
    </table>
</div>
