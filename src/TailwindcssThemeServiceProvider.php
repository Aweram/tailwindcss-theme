<?php

namespace Aweram\TailwindcssTheme;

use Illuminate\Support\ServiceProvider;

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
                __DIR__ . "/../stubs/components/AdminMenu.php" => app_path("View/Components/Admin/AdminMenu.php"),
                __DIR__ . "/../stubs/components/AdminNavigation.php" => app_path("View/Components/Admin/AdminNavigation.php"),
            ], "layout-components");

            // Публикация layouts представлений
            $this->publishes([
                __DIR__ . "/resources/views/layouts" => resource_path("views/vendor/tt/layouts")
            ], "layout-views");

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
