@switch($layout)
    @case("admin")
        <x-admin-layout>
            @include("tt::styles")
        </x-admin-layout>
        @break

    @case("auth")
        <x-auth-layout>

        </x-auth-layout>
        @break

    @default
        <x-app-layout>
            @include("tt::styles")
        </x-app-layout>
@endswitch
