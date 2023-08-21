<div class="row">
    <div class="col w-full mb-indent-half">
        <div class="card">
            <div class="card-body">
                <h3 class="text-3xl font-bold">Table</h3>
            </div>
            <x-tt::table class="min-w-[1000px]">
                <x-slot name="head">
                    <tr>
                        <x-tt::table.heading sortable>Not apply sort</x-tt::table.heading>
                        <x-tt::table.heading sortable direction="asc">Sort asc</x-tt::table.heading>
                        <x-tt::table.heading sortable direction="desc">Sort desc</x-tt::table.heading>
                        <x-tt::table.heading>No sort</x-tt::table.heading>
                    </tr>
                </x-slot>
                <x-slot name="body">
                    <tr>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                </x-slot>
                <x-slot name="caption">
                    Caption
                </x-slot>
            </x-tt::table>
        </div>
    </div>
</div>
