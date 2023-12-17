### Описание

Пакет содержит настройки для подключения `tailwindcss` и `livewire` к пустому проекту на Laravel. Есть разделение стилей на основной сайт и на панель администрирования. В фале `tailwindcss-theme.php` есть настройки для показа страницы со стилями по умолчанию `/styles`, при запуске приложения в `prod` нужно отключить страницу `showStylesPage`. Так же есть три основных шаблона: `app`, `admin` и `auth`. По умолчанию `auth` использует стили `admin`.

Прописаны стили (основой был bootstrap, взяты наиболее часто используемые элементы):
- Основные цвета темы (light, dark, success, danger, warning, info, primary, secondary)
- Кнопки (цвета, типы, размеры)
- Элементы формы
- Card, как в bootstrap, но с меньшим количеством вариантов
- Dropdown
- Dialog modal
- Aside modal
- Pagination (два шаблона, для `livewire` и для обычной пагинации)
- Таблицы
    
### Установка

Сначала нужно создать в приложении компоненты для основных шаблонов:

    php artisan vendor:publish --provider="Aweram\TailwindcssTheme\TailwindcssThemeServiceProvider" --tag="layout-components"

Что бы подключить стили, нужно заменить фалы проекта: `package.json`, `tailwind.config.js`, `vite.config.js`, `app.css`, `app.js`. Комманда заменит файлы и добавит новые:

    php artisan vendor:publish --provider="Aweram\TailwindcssTheme\TailwindcssThemeServiceProvider" --tag="frontend" --force

Для добавления изображений, которые есть в пакете:

    php artisan vendor:publish --provider="Aweram\TailwindcssTheme\TailwindcssThemeServiceProvider" --tag="images"

Что бы редактировать меню в панели администрования, нужно переопределить файлы:

    php artisan vendor:publish --provider="Aweram\TailwindcssTheme\TailwindcssThemeServiceProvider" --tag="changable"

Для установки пакетов и запуска:

    npm install
    npm run dev

Для запуска финальной сборки:

    npm run build

Если нужно поменять основные шаблоны, нужно скопировать их в приложение:

    php artisan vendor:publish --provider="Aweram\TailwindcssTheme\TailwindcssThemeServiceProvider" --tag="layout-views"


### Auth

В пакете есть представления для авторизации. Для из использования, можно установить Fortify:
    
    composer require laravel/fortify
    php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"

Что бы подключить представления, нужно добавить `App\Providers\FortifyServiceProvider::class,` в `app.php`. В `fortify.php` отключить страницу регистрации, страницы нет в пакете. В `FortifyServiceProvider.php` добавить настройку для представлений:

    Fortify::viewPrefix("tt::auth.");
