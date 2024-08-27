@props(["id" => "infoHidden"])
<div class="h-0">
    <x-tt::dropdown class="top-0">
        <x-slot name="button">
            <button type="button" id="{{ $id }}" class="hidden text-info hover:text-info-hover">
                <x-tt::ico.question />
            </button>
        </x-slot>
        <x-slot name="content">
            <div class="text-sm p-indent-half space-y-indent-half">
                <p>
                    Для добавления параграфа добавить двойной перевод строки <span class="text-info">(Shift+Enter дважды)</span>
                </p>
                <p>
                    Для перевода строки добавить перевод два или больше пробелов в конец строки и перевести строку <span class="text-info">(Shift+Enter)</span>
                </p>
                <p>
                    Для добавления жирного текста добавить <span class="text-info">**</span> до и после фрагмента текста
                </p>
                <p>
                    Для добавления списка добавить <span class="text-info">-</span> с пробелом после, перед каждой строкой в списке
                </p>
                <p>
                    Для добавления ссылки окружить текст ссылки <span class="text-info">[]</span>, после окружить ссылку <span class="text-info">()</span>. Пример: <span class="text-info">[Example link](https://ya.ru)</span>
                </p>
            </div>
        </x-slot>
    </x-tt::dropdown>
</div>
