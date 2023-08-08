<?php

namespace PortedCheese\AweramComponents;

use Illuminate\Support\ServiceProvider;

class AweramComponentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->configurePublishing();

        // Подключение страниц
        $this->loadViewsFrom(__DIR__ . "/resources/views", "wrmc");
    }

    public function register()
    {
        // Подключение конфигурации
        $this->mergeConfigFrom(
            __DIR__ . "/config/aweram-components.php", "aweram-components"
        );

        // Подключение routes
        $this->loadRoutesFrom(__DIR__ . "/routes/web.php");
    }

    /**
     * Конфигурация публикуемых файлов
     *
     * @return void
     */
    protected function configurePublishing()
    {
        if ($this->app->runningInConsole()) {
            // Публикация layouts конмонентов.
            $this->publishes([
                __DIR__ . "/../stubs/layout/AdminLayout.php" => app_path("View/Components/AdminLayout.php"),
                __DIR__ . "/../stubs/layout/AppLayout.php" => app_path("View/Components/AppLayout.php"),
                __DIR__ . "/../stubs/layout/AuthLayout.php" => app_path("View/Components/AuthLayout.php"),
            ], "layout-components");

            $this->publishes([
                __DIR__ . "/resources/views/layouts" => resource_path("views/vendor/wrmc/layouts")
            ], "layout-views");
        }
    }
}
