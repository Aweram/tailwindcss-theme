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
            <x-wrmc::btn light class="m-2">Light btn</x-wrmc::btn>
            <x-wrmc::btn dark class="m-2">Dark btn</x-wrmc::btn>
            <x-wrmc::btn success class="m-2">Success btn</x-wrmc::btn>
            <x-wrmc::btn danger class="m-2">Danger btn</x-wrmc::btn>
            <x-wrmc::btn warning class="m-2">Warning btn</x-wrmc::btn>
            <x-wrmc::btn info class="m-2">Info btn</x-wrmc::btn>
            <x-wrmc::btn primary class="m-2">Primary btn</x-wrmc::btn>
            <x-wrmc::btn secondary class="m-2">Secondary btn</x-wrmc::btn>
        </div>
        <div class="flex justify-between flex-wrap bg-white rounded p-2">
            <x-wrmc::btn outlineLight class="m-2">Light btn</x-wrmc::btn>
            <x-wrmc::btn outlineDark class="m-2">Dark btn</x-wrmc::btn>
            <x-wrmc::btn outlineSuccess class="m-2">Success btn</x-wrmc::btn>
            <x-wrmc::btn outlineDanger class="m-2">Danger btn</x-wrmc::btn>
            <x-wrmc::btn outlineWarning class="m-2">Warning btn</x-wrmc::btn>
            <x-wrmc::btn outlineInfo class="m-2">Info btn</x-wrmc::btn>
            <x-wrmc::btn outlinePrimary class="m-2">Primary btn</x-wrmc::btn>
            <x-wrmc::btn outlineSecondary class="m-2">Secondary btn</x-wrmc::btn>
        </div>

        <div class="flex flex-wrap items-center justify-start bg-white rounded p-2">
            <x-wrmc::btn isLink primary href="#" target="_blank" class="m-2">Link btn</x-wrmc::btn>
            <x-wrmc::btn primary :disabledCondition="true" class="m-2">Disabled btn</x-wrmc::btn>
            <x-wrmc::btn primary class="m-2">Default round btn</x-wrmc::btn>
            <x-wrmc::btn primary roundedNone class="m-2">No rounded btn</x-wrmc::btn>
            <x-wrmc::btn primary roundedNone class="m-2 rounded">Custom rounded btn</x-wrmc::btn>
        </div>

        <div class="flex flex-wrap items-center justify-start bg-white rounded p-2">
            <x-wrmc::btn primary sm class="m-2">Small btn</x-wrmc::btn>
            <x-wrmc::btn primary class="m-2">Default btn</x-wrmc::btn>
            <x-wrmc::btn primary lg class="m-2">Large btn</x-wrmc::btn>
        </div>
    </div>
</div>
