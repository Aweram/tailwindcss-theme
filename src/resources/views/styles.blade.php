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
            <x-wrmc::btn class="m-2 btn-light">Light btn</x-wrmc::btn>
            <x-wrmc::btn class="m-2 btn-dark">Dark btn</x-wrmc::btn>
            <x-wrmc::btn class="m-2 btn-success">Success btn</x-wrmc::btn>
            <x-wrmc::btn class="m-2 btn-danger">Danger btn</x-wrmc::btn>
            <x-wrmc::btn class="m-2 btn-warning">Warning btn</x-wrmc::btn>
            <x-wrmc::btn class="m-2 btn-info">Info btn</x-wrmc::btn>
            <x-wrmc::btn class="m-2 btn-primary">Primary btn</x-wrmc::btn>
            <x-wrmc::btn class="m-2 btn-secondary">Secondary btn</x-wrmc::btn>
        </div>
        <div class="flex justify-between flex-wrap bg-white rounded p-2">
            <x-wrmc::btn class="m-2 btn-outline-light">Light btn</x-wrmc::btn>
            <x-wrmc::btn class="m-2 btn-outline-dark">Dark btn</x-wrmc::btn>
            <x-wrmc::btn class="m-2 btn-outline-success">Success btn</x-wrmc::btn>
            <x-wrmc::btn class="m-2 btn-outline-danger">Danger btn</x-wrmc::btn>
            <x-wrmc::btn class="m-2 btn-outline-warning">Warning btn</x-wrmc::btn>
            <x-wrmc::btn class="m-2 btn-outline-info">Info btn</x-wrmc::btn>
            <x-wrmc::btn class="m-2 btn-outline-primary">Primary btn</x-wrmc::btn>
            <x-wrmc::btn class="m-2 btn-outline-secondary">Secondary btn</x-wrmc::btn>
        </div>

        <div class="flex flex-wrap items-center justify-start bg-white rounded p-2">
            <x-wrmc::btn isLink href="#" target="_blank" class="m-2 btn-primary">Link btn</x-wrmc::btn>
            <x-wrmc::btn :disabledCondition="true" class="m-2 btn-danger">Disabled btn</x-wrmc::btn>
            <x-wrmc::btn class="m-2 btn-secondary">Default round btn</x-wrmc::btn>
            <x-wrmc::btn class="m-2 btn-primary rounded-none">No rounded btn</x-wrmc::btn>
            <x-wrmc::btn class="m-2 btn-success rounded">Custom rounded btn</x-wrmc::btn>
        </div>

        <div class="flex flex-wrap items-center justify-start bg-white rounded p-2">
            <x-wrmc::btn class="m-2 btn-primary btn-sm">Small btn</x-wrmc::btn>
            <x-wrmc::btn class="m-2 btn-primary">Default btn</x-wrmc::btn>
            <x-wrmc::btn class="m-2 btn-primary btn-lg">Large btn</x-wrmc::btn>
        </div>

        <div class="flex flex-wrap items-center justify-start bg-white rounded p-2">
            <x-wrmc::btn class="m-2 btn-primary btn-sm">
                <x-slot name="ico"><x-wrmc::ico.circle-plus width="15" height="auto" /></x-slot>
                Ico small
            </x-wrmc::btn>
            <x-wrmc::btn class="m-2 btn-primary">
                <x-slot name="ico"><x-wrmc::ico.circle-plus /></x-slot>
                Ico normal
            </x-wrmc::btn>
            <x-wrmc::btn class="m-2 btn-primary btn-lg">
                <x-slot name="ico"><x-wrmc::ico.circle-plus width="23" height="auto" /></x-slot>
                Ico big
            </x-wrmc::btn>
        </div>

        <div class="flex flex-wrap items-center justify-start bg-white rounded p-2">
            <x-wrmc::btn icoText="lg" class="m-2 btn-primary btn-sm px-btn-x-ico lg:px-btn-x-sm">
                <x-wrmc::ico.circle-plus width="15" height="auto" />
                <span class="hidden lg:inline-block pl-btn-ico-text">Hidden text on lg</span>
            </x-wrmc::btn>
            <x-wrmc::btn icoText="lg" class="m-2 btn-primary px-btn-x-ico lg:px-btn-x">
                <x-wrmc::ico.circle-plus />
                <span class="hidden lg:inline-block pl-btn-ico-text">Hidden text on lg</span>
            </x-wrmc::btn>
            <x-wrmc::btn icoText="lg" class="m-2 btn-primary btn-lg px-btn-x-ico lg:px-btn-x-lg">
                <x-wrmc::ico.circle-plus width="23" height="auto" />
                <span class="hidden lg:inline-block pl-btn-ico-text">Hidden text on lg</span>
            </x-wrmc::btn>
        </div>

        <div class="flex flex-wrap items-center justify-start bg-white rounded p-2">
            <x-wrmc::btn singleIco class="m-2 btn-primary btn-sm">
                <x-wrmc::ico.circle-plus width="15" height="auto" />
            </x-wrmc::btn>
            <x-wrmc::btn singleIco class="m-2 btn-primary">
                <x-wrmc::ico.circle-plus />
            </x-wrmc::btn>
            <x-wrmc::btn singleIco class="m-2 btn-primary btn-lg">
                <x-wrmc::ico.circle-plus width="23" height="auto" />
            </x-wrmc::btn>
        </div>
    </div>
</div>
