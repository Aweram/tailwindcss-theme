<div class="row">
    <div class="col w-full">
        <div class="card">
            <div class="card-header">
                <h3 class="text-3xl font-bold">Pagination</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col w-1/2">
                        <h4 class="text-2xl card-title">Live pagination</h4>
                        <livewire:tt-example-pagination />
                    </div>
                    <div class="col w-1/2">
                        <h4 class="text-2xl card-title">Normal pagination</h4>
                        <ul>
                            @foreach($items as $item)
                                <li>{{ $item->name }}</li>
                            @endforeach
                        </ul>

                        {{ $items->links("tt::pagination.default") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
