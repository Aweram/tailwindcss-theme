<x-tt::admin-menu.item href="#">
    <x-slot name="ico"><x-tt::ico.home width="18" height="18" /></x-slot>
    With ico
</x-tt::admin-menu.item>

<x-tt::admin-menu.item href="#" :active="true">
    <x-slot name="ico"><x-tt::ico.home width="18" height="18" /></x-slot>
    Children
    <x-slot name="children">
        <x-tt::admin-menu.child href="#" :active="true">Child 1</x-tt::admin-menu.child>
        <x-tt::admin-menu.child href="#">Child 2</x-tt::admin-menu.child>
        <x-tt::admin-menu.child href="#">Child 3</x-tt::admin-menu.child>
    </x-slot>
</x-tt::admin-menu.item>

<x-tt::admin-menu.item href="#">
    <x-slot name="ico"><x-tt::ico.home width="18" height="18" /></x-slot>
    Second children
    <x-slot name="children">
        <x-tt::admin-menu.child href="#">Child 1</x-tt::admin-menu.child>
        <x-tt::admin-menu.child href="#">Child 2</x-tt::admin-menu.child>
        <x-tt::admin-menu.child href="#">Child 3</x-tt::admin-menu.child>
    </x-slot>
</x-tt::admin-menu.item>

<x-tt::admin-menu.item href="#">
    Without ico
</x-tt::admin-menu.item>
