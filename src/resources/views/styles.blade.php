<div class="container">
    <div class="space-y-3 my-3">
        <h3 class="text-3xl font-bold">Theme colors</h3>
        @include("wrmc::styles-blocks.colors")
        <h3 class="text-3xl font-bold">Buttons</h3>
        <h4 class="text-2xl">Colors</h4>
        @include("wrmc::styles-blocks.btn-colors")
        <h4 class="text-2xl">Types</h4>
        @include("wrmc::styles-blocks.btn-types")
        <h4 class="text-2xl">Sizes</h4>
        @include("wrmc::styles-blocks.btn-sizes")
        <h3 class="text-3xl font-bold">Forms</h3>
        <h4 class="text-2xl">Form control</h4>
        @include("wrmc::styles-blocks.form-control")
        <h4 class="text-2xl">Form control small</h4>
        @include("wrmc::styles-blocks.form-control-sm")
        <h4 class="text-2xl">Form control large</h4>
        @include("wrmc::styles-blocks.form-control-sm")
        <h4 class="text-2xl">Form select</h4>
        <div class="flex flex-wrap items-center bg-white rounded p-2">
            <div class="w-1/3 pr-3">
                <select class="form-select form-select-sm" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="w-1/3 px-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="w-1/3 pl-3">
                <select class="form-select form-select-lg" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
    </div>
</div>
