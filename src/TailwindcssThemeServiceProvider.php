<?php

namespace Aweram\TailwindcssTheme;

use Aweram\TailwindcssTheme\Livewire\ExampleModalsWire;
use Aweram\TailwindcssTheme\Livewire\ExampleUserPaginationWire;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class TailwindcssThemeServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->configurePublishing();

        // Подключение страниц
        $this->loadViewsFrom(__DIR__ . "/resources/views", "tt");

        // Livewire
        Livewire::component("tt-example-form", ExampleModalsWire::class);
        Livewire::component("tt-example-pagination", ExampleUserPaginationWire::class);
    }

    /**
     * @return void
     */
    public function register(): void
    {
        // Подключение конфигурации
        $this->mergeConfigFrom(
            __DIR__ . "/config/tailwindcss-theme.php", "tailwindcss-theme"
        );

        // Подключение routes
        $this->loadRoutesFrom(__DIR__ . "/routes/web.php");
    }

    /**
     * Конфигурация публикуемых файлов
     *
     * @return void
     */
    protected function configurePublishing(): void
    {
        if ($this->app->runningInConsole()) {
            // Публикация layouts конмонентов.
            $this->publishes([
                __DIR__ . "/../stubs/layout/AdminLayout.php" => app_path("View/Components/AdminLayout.php"),
                __DIR__ . "/../stubs/layout/AppLayout.php" => app_path("View/Components/AppLayout.php"),
                __DIR__ . "/../stubs/layout/AuthLayout.php" => app_path("View/Components/AuthLayout.php"),
            ], "layout-components");

            // Публикация layouts представлений
            $this->publishes([
                __DIR__ . "/resources/views/layouts" => resource_path("views/vendor/tt/layouts")
            ], "layout-views");

            // Публикация того что надо менять
            $this->publishes([
                __DIR__ . "/resources/views/changable" => resource_path("views/vendor/tt/changable")
            ], "changable");

            // Публикация frontend
            $this->publishes([
                __DIR__ . "/../stubs/frontend/config" => base_path(),
                __DIR__ . "/../stubs/frontend/css" => resource_path("css"),
                __DIR__ . "/../stubs/frontend/js" => resource_path("js")
            ], "frontend");

            // Публикация изображений
            $this->publishes([
                __DIR__ . "/imgs" => public_path("imgs/aweram"),
            ], "images");
        }
    }
}
