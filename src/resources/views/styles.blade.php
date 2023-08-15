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

        <div class="flex justify-between flex-wrap bg-white rounded p-2">
            <div>
                <label for="textExample2" class="inline-block mb-2">Example label</label>
                <input type="text" id="textExample2" class="form-control form-control-sm" placeholder="Form text example">
            </div>
            <div>
                <label for="fileExample2" class="inline-block mb-2">Example label</label>
                <input type="file" id="fileExampleFile2" class="form-control form-control-sm" placeholder="Form text example">
            </div>
            <div>
                <label for="textareaExample2" class="inline-block mb-2">Example label</label>
                <textarea id="textareaExample2" class="form-control form-control-sm" rows="3"></textarea>
            </div>
        </div>

        <div class="flex justify-between flex-wrap bg-white rounded p-2">
            <div>
                <label for="textExample3" class="inline-block mb-2">Example label</label>
                <input type="text" id="textExample3" class="form-control form-control-lg" placeholder="Form text example">
            </div>
            <div>
                <label for="fileExample3" class="inline-block mb-2">Example label</label>
                <input type="file" id="fileExampleFile3" class="form-control form-control-lg" placeholder="Form text example">
            </div>
            <div>
                <label for="textareaExample3" class="inline-block mb-2">Example label</label>
                <textarea id="textareaExample3" class="form-control form-control-lg" rows="3"></textarea>
            </div>
        </div>
    </div>
</div>
