<nav class="beautify-scrollbar fixed top-0 bottom-0 left-0 z-admin-menu h-screen w-menu overflow-x-hidden overflow-y-auto transition duration-500 transform -translate-x-menu xl:translate-x-0 bg-white"
     x-bind:class="{ '-translate-x-menu': ! menuIsOpen }">
    <div class="px-indent-half mb-indent">
        <a href="{{ \Illuminate\Support\Facades\Route::has('home') ? route('home') : '/' }}"
           class="pl-indent-half mb-indent py-indent block border-b border-bottom border-secondary/40">
            <img src="{{ asset("imgs/aweram/logo.png") }}" alt="Aweram" class="h-auto w-32">
        </a>
    </div>
    <x-tt::admin-menu />
</nav>

<section class="fixed inset-0 h-screen bg-dark opacity-50 z-admin-menu-backdrop xl:hidden"
         x-bind:class="{ 'hidden' : ! menuIsOpen }" x-on:click="menuIsOpen = false"></section>
