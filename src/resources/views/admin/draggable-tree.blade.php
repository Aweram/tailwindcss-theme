@props(["tree" => [], "child" => false, "showUrl" => null])
<ul class="{{ $child ? 'ml-indent-half border-l border-dashed pl-indent-half pt-indent-half' : '' }}" drag-category-parent>
    @foreach($tree as $key => $item)
        <li class="pb-indent-half" drag-category-item="{{ $item['id'] }}"
            drag-category-item-order="{{ $key }}"
            drag-category-item-parent="{{ $item['parent'] ?? 0 }}"
            wire:key="{{ $item['id'] }}-{{ $item['ts'] }}">
            <div class="flex items-center justify-between transition-all border border-transparent" drag-category-data>
                <div class="text-lg font-medium mr-indent text-nowrap flex justify-start items-center">
                    <div class="flex items-center">
                        <x-tt::ico.bars class="text-secondary mr-indent cursor-grab" drag-category-grab />
                    </div>
                    <div>{{ $item["title"] }}</div>
                </div>

                <div class="flex-1 h-px min-w-indent border-t border-dotted border-secondary"></div>

                <div class="flex items-center justify-start ml-indent">
                    <button type="button" class="btn btn-success btn-sm px-btn-x-ico rounded-e-none"
                            @can("create", $item["model"]::class) wire:loading.attr="disabled"
                            @else disabled
                            @endcan
                            wire:click="showCreate({{ $item['id'] }})">
                        <x-tt::ico.circle-plus />
                    </button>
                    @if ($showUrl && \Illuminate\Support\Facades\Route::has($showUrl))
                        <a href="{{ route($showUrl, ['category' => $item['slug']]) }}"
                           class="btn btn-primary btn-sm px-btn-x-ico rounded-none">
                            <x-tt::ico.eye width="18" height="18" />
                        </a>
                    @endif
                    @if (key_exists("imageUrl", $item) && $item["imageUrl"])
                        <a href="{{ $item["imageUrl"] }}" class="btn btn-primary btn-sm px-btn-x-ico rounded-none" target="_blank">
                            <x-tt::ico.image width="18" height="18" />
                        </a>
                    @endif
                    <button type="button" class="btn btn-dark btn-sm px-btn-x-ico rounded-none"
                            @can("update", $item["model"]) wire:loading.attr="disabled"
                            @else disabled
                            @endcan
                            wire:click="showEdit({{ $item['id'] }})">
                        <x-tt::ico.edit />
                    </button>
                    <button type="button" class="btn btn-danger btn-sm px-btn-x-ico rounded-s-none"
                            wire:click="showDelete({{ $item['id'] }})"
                            @can("delete", $item["model"]) @if(! empty($item['children'])) disabled @else wire:loading.attr="disabled" @endif
                            @else disabled
                            @endcan>
                        <x-tt::ico.trash />
                    </button>
                    @if (key_exists("published_at", $item))
                        <button type="button"
                                class="btn {{ $item["published_at"] ? 'btn-success' : 'btn-danger' }} btn-sm px-btn-x-ico ml-2"
                                @can("update", $item["model"]) wire:loading.attr="disabled"
                                @else disabled
                                @endcan
                                wire:click="switchPublish({{ $item["id"] }})">
                            @if ($item["published_at"])
                                <x-tt::ico.toggle-on />
                            @else
                                <x-tt::ico.toggle-off />
                            @endif
                        </button>
                    @endif
                </div>
            </div>

            @if (empty($item["children"]))
                <ul class="ml-indent-half border-l border-dashed pl-indent-half" drag-category-parent>
                    <li class="" drag-category-item="{{ $item['id'] }}"
                        drag-category-item-order="{{ $key }}"
                        drag-category-item-parent="{{ $item['parent'] ?? 0 }}"
                        drag-category-item-ignore
                        wire:key="{{ $item['id'] }}-{{ $item['ts'] }}">
                        <div class="border border-secondary border-dotted h-6 pb-indent-half hidden" drag-category-data drag-category-empty></div>
                    </li>
                </ul>
            @endif

            @includeWhen(! empty($item["children"]), "tt::admin.draggable-tree", ["tree" => $item["children"], "child" => true])
        </li>
    @endforeach
</ul>
