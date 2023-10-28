    php artisan vendor:publish --provider="Aweram\TailwindcssTheme\TailwindcssThemeServiceProvider" --tag="layout-components"

    php artisan vendor:publish --provider="Aweram\TailwindcssTheme\TailwindcssThemeServiceProvider" --tag="layout-views"

    php artisan vendor:publish --provider="Aweram\TailwindcssTheme\TailwindcssThemeServiceProvider" --tag="frontend"

    php artisan vendor:publish --provider="Aweram\TailwindcssTheme\TailwindcssThemeServiceProvider" --tag="images"

### Auth

Install Laravel Fortify:
    
    composer require laravel/fortify
    php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"

Add `App\Providers\FortifyServiceProvider::class,` to `app.php` in configuration. In `fortify.php` disable registration page, this page is not present in package. In `FortifyServiceProvider.php` add settings for views:

    Fortify::viewPrefix("tt::auth.");
