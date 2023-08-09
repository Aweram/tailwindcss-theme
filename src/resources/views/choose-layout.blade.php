@switch($layout)
    @case("admin")
        <x-admin-layout>
            @include("wrmc::styles")
        </x-admin-layout>
        @break

    @default
        <x-app-layout>
            @include("wrmc::styles")
        </x-app-layout>
@endswitch
