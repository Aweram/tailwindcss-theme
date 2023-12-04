<header class="w-nav xl:w-nav-full fixed right-0 top-0 z-fixed mt-indent-sm mx-indent-half xl:mx-indent bg-white rounded-lg shadow-lg transition-all duration-500">
    <div class="beautify-scrollbar flex justify-between relative py-indent-half px-indent">
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
                            <ul>
                                <li class="hover:bg-light-hover px-indent-half">
                                    <form method="post" action="{{ route('logout') }}" x-data>
                                        @csrf
                                        <a href="#" @click.prevent="$root.submit();">
                                            {{ __("Log Out") }}
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </x-slot>
                    </x-tt::dropdown>
                </li>
            @endauth
        </ul>
    </div>
</header>
