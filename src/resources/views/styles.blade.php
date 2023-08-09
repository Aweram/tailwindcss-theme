<div class="container">
    <div class="space-y-3">
        <div class="flex justify-between flex-wrap bg-white rounded p-2 text-xs font-medium text-white">
            <x-wrmc::theme-color class="m-2 bg-light text-dark border-[#BBB8C7]">light</x-wrmc::theme-color>
            <x-wrmc::theme-color class="m-2 bg-dark border-dark">dark</x-wrmc::theme-color>
            <x-wrmc::theme-color class="m-2 bg-success border-success">success</x-wrmc::theme-color>
            <x-wrmc::theme-color class="m-2 bg-danger border-danger">danger</x-wrmc::theme-color>
            <x-wrmc::theme-color class="m-2 bg-warning border-warning text-dark">warning</x-wrmc::theme-color>
            <x-wrmc::theme-color class="m-2 bg-info border-info text-dark">info</x-wrmc::theme-color>
            <x-wrmc::theme-color class="m-2 bg-primary border-primary">primary</x-wrmc::theme-color>
            <x-wrmc::theme-color class="m-2 bg-secondary border-secondary">secondary</x-wrmc::theme-color>
        </div>

        <div class="flex justify-between flex-wrap bg-white rounded p-2">
            <x-wrmc::btn light class="m-2">Light button</x-wrmc::btn>
            <x-wrmc::btn dark class="m-2">Dark button</x-wrmc::btn>
            <x-wrmc::btn success class="m-2">Success button</x-wrmc::btn>
            <x-wrmc::btn danger class="m-2">Danger button</x-wrmc::btn>
            <x-wrmc::btn warning class="m-2">Warning button</x-wrmc::btn>
            <x-wrmc::btn info class="m-2">Info button</x-wrmc::btn>
            <x-wrmc::btn primary class="m-2">Primary button</x-wrmc::btn>
            <x-wrmc::btn secondary class="m-2">Secondary button</x-wrmc::btn>
        </div>
        <div class="flex justify-between flex-wrap bg-white rounded p-2">
            <x-wrmc::btn outlineLight class="m-2">Light button</x-wrmc::btn>
            <x-wrmc::btn outlineDark class="m-2">Dark button</x-wrmc::btn>
            <x-wrmc::btn outlineSuccess class="m-2">Success button</x-wrmc::btn>
            <x-wrmc::btn outlineDanger class="m-2">Danger button</x-wrmc::btn>
            <x-wrmc::btn outlineWarning class="m-2">Warning button</x-wrmc::btn>
            <x-wrmc::btn outlineInfo class="m-2">Info button</x-wrmc::btn>
            <x-wrmc::btn outlinePrimary class="m-2">Primary button</x-wrmc::btn>
            <x-wrmc::btn outlineSecondary class="m-2">Secondary button</x-wrmc::btn>
        </div>

        <div class="flex flex-wrap items-center justify-start bg-white rounded p-2">
            <x-wrmc::btn isLink primary href="#" target="_blank" class="m-2">Link button</x-wrmc::btn>
            <x-wrmc::btn primary :disabledCondition="true" class="m-2">Disabled button</x-wrmc::btn>
            <x-wrmc::btn primary class="m-2">Default round button</x-wrmc::btn>
            <x-wrmc::btn primary roundedNone class="m-2">No rounded button</x-wrmc::btn>
            <x-wrmc::btn primary roundedNone class="m-2 rounded">Custom rounded button</x-wrmc::btn>
        </div>
    </div>
</div>
