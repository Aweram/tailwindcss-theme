<div class="container">
    <div class="space-y-3">
        @include("wrmc::styles-blocks.colors")
        @include("wrmc::styles-blocks.btn-colors")
        @include("wrmc::styles-blocks.btn-types")
        @include("wrmc::styles-blocks.btn-sizes")

        <div class="flex justify-between flex-wrap bg-white rounded p-2">
            <div>
                <label for="textExample" class="inline-block mb-2">Example label</label>
                <input type="text" id="textExample" class="form-control" placeholder="Form text example">
            </div>
            <div>
                <label for="fileExample" class="inline-block mb-2">Example label</label>
                <input type="file" id="fileExampleFile" class="form-control" placeholder="Form text example">
            </div>
            <div>
                <label for="textareaExample" class="inline-block mb-2">Example label</label>
                <textarea id="textareaExample" class="form-control" rows="3"></textarea>
            </div>
        </div>
    </div>
</div>
