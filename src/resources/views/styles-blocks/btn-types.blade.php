<div class="flex flex-wrap items-center justify-start bg-white rounded p-2">
    <x-wrmc::btn isLink href="#" target="_blank" class="m-2 btn-primary">Link btn</x-wrmc::btn>
    <x-wrmc::btn class="m-2 btn-primary">
        <x-wrmc::ico.circle-plus /> <span class="pl-btn-ico-text">Ico btn</span>
    </x-wrmc::btn>
    <x-wrmc::btn singleIco class="m-2 btn-primary">
        <x-wrmc::ico.circle-plus />
    </x-wrmc::btn>
    <x-wrmc::btn :disabledCondition="true" class="m-2 btn-danger">Disabled btn</x-wrmc::btn>
    <x-wrmc::btn class="m-2 btn-secondary">Default round btn</x-wrmc::btn>
    <x-wrmc::btn class="m-2 btn-primary rounded-none">No rounded btn</x-wrmc::btn>
    <x-wrmc::btn class="m-2 btn-success rounded">Custom rounded btn</x-wrmc::btn>
</div>
