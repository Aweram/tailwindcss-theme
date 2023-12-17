@switch($layout)
    @case("admin")
        <x-admin-layout>
            <x-slot name="pageTitle">Page title</x-slot>
            @include("tt::styles")
        </x-admin-layout>
        @break

    @default
        <x-app-layout>
            <div class="container">
                @include("tt::styles")
            </div>
        </x-app-layout>
@endswitch
