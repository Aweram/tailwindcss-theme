<?php

namespace PortedCheese\AweramComponents;

use Illuminate\Support\ServiceProvider;

class AweramComponentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        setlocale(LC_ALL, 'ru_RU.UTF-8');
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
}
