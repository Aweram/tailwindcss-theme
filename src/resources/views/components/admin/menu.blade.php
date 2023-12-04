<nav class="beautify-scrollbar fixed top-0 bottom-0 left-0 z-50 h-screen w-menu overflow-x-hidden overflow-y-auto transition duration-500 transform -translate-x-menu xl:translate-x-0 bg-white"
     x-bind:class="{ '-translate-x-menu': ! menuIsOpen }"></nav>

<section class="fixed inset-0 h-screen bg-dark opacity-50 z-40 xl:hidden"
         x-bind:class="{ 'hidden' : ! menuIsOpen }" x-on:click="menuIsOpen = false"></section>
