<div class="flex flex-wrap items-center justify-start bg-white rounded p-2">
    <x-wrmc::btn class="m-2 btn-primary btn-sm">Small btn</x-wrmc::btn>
    <x-wrmc::btn class="m-2 btn-primary">Default btn</x-wrmc::btn>
    <x-wrmc::btn class="m-2 btn-primary btn-lg">Large btn</x-wrmc::btn>
</div>

<div class="flex flex-wrap items-center justify-start bg-white rounded p-2">
    <x-wrmc::btn class="m-2 btn-primary btn-sm">
        <x-wrmc::ico.circle-plus width="15" height="auto" /> <span class="pl-btn-ico-text">Ico small</span>
    </x-wrmc::btn>
    <x-wrmc::btn class="m-2 btn-primary">
        <x-wrmc::ico.circle-plus /> <span class="pl-btn-ico-text">Ico normal</span>
    </x-wrmc::btn>
    <x-wrmc::btn class="m-2 btn-primary btn-lg">
        <x-wrmc::ico.circle-plus width="23" height="auto" /> <span class="pl-btn-ico-text">Ico big</span>
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
