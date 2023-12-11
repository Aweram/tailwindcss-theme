<div class="row">
    <div class="col w-full">
        <div class="card overflow-visible">
            <div class="card-header">
                <h3 class="text-3xl font-bold">Dropdown and Modal</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col w-1/3">
                        <h4 class="text-2xl card-title">Dropdown</h4>

                        <x-tt::dropdown>
                            <x-slot name="text">Click</x-slot>
                            <x-slot name="content">
                                <div class="px-indent-half">
                                    Hello
                                </div>
                            </x-slot>
                        </x-tt::dropdown>
                    </div>

                    <div class="col w-2/3">
                        <livewire:tt-example-form />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
