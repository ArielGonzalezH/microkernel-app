<?php

namespace plugins\CoursesManager;

use Illuminate\Support\ServiceProvider;

class CoursesManagerPluginServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Registrar rutas
        $this->loadRoutesFrom(__DIR__ . '/routes.php');

        // Registrar vistas
        $this->loadViewsFrom(__DIR__ . '/Views', 'exampleplugin');
    }

    public function boot()
    {
        // Registrando rutas desde el archivo de rutas
        $this->loadRoutesFrom(__DIR__ . '/routes.php');

        // Registrar vistas para el plugin
        $this->loadViewsFrom(__DIR__ . '/Views', 'coursesmanager');
    }
}
