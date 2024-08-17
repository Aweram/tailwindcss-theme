<ul class="flex flex-nowrap items-center justify-start mr-auto">
    <li class="px-1 xl:hidden">
        <button type="button" class="navigation-link" x-on:click="menuIsOpen = ! menuIsOpen">
            <x-tt::ico.bars />
        </button>
    </li>
</ul>

<ul class="flex flex-nowrap items-center justify-end ml-auto">
    @auth
        <li class="px-1">
            <x-tt::dropdown class="origin-top-right right-0 mt-2">
                <x-slot name="button">
                    <button type="button" class="navigation-link">
                        {{ \Illuminate\Support\Facades\Auth::getUser()->name }}
                        <x-tt::ico.arrow-down class="ml-2 -mr-0.5" />
                    </button>
                </x-slot>
                <x-slot name="content">
                    <button type="button" x-data @click="$dispatch('show-user-change-password')"
                            class="block px-indent-half hover:bg-light-hover text-nowrap">
                        {{ __("Change password") }}
                    </button>
                    <form method="post" action="{{ route('logout') }}" x-data>
                        @csrf
                        <a href="#" @click.prevent="$root.submit();" class="block px-indent-half hover:bg-light-hover">
                            {{ __("Log out") }}
                        </a>
                    </form>
                </x-slot>
            </x-tt::dropdown>
        </li>
    @endauth
</ul>

@push("modals")
    <livewire:tt-change-user-password />
@endpush
