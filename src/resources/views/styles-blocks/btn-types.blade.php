<div class="flex flex-wrap items-center justify-start">
    <a href="#" class="m-2 btn btn-primary" target="_blank">Link btn</a>
    <button type="button" class="m-2 btn btn-primary">
        <x-tt::ico.circle-plus /> <span class="pl-btn-ico-text">Ico btn</span>
    </button>
    <button type="button" class="m-2 btn btn-primary px-btn-x-ico lg:px-btn-x">
        <x-tt::ico.circle-plus />
        <span class="hidden lg:inline-block pl-btn-ico-text">Hidden text on lg</span>
    </button>
    <button type="button" class="m-2 btn btn-primary px-btn-x-ico"><x-tt::ico.circle-plus /></button>
    <button disabled class="m-2 btn btn-danger">Disabled btn</button>
    <div class="w-full"></div>
    <button type="button" class="m-2 btn btn-secondary">Default round btn</button>
    <button type="button" class="m-2 btn btn-primary rounded-none">No rounded btn</button>
    <button type="button" class="m-2 btn btn-success rounded">Custom rounded btn</button>
</div>
