<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->loadPlugins();
    }

    protected function loadPlugins()
    {
        $plugins = config('plugins.enabled');

        foreach ($plugins as $plugin) {
            $pluginServiceProvider = "plugins\\{$plugin}\\{$plugin}ServiceProvider";
            if (class_exists($pluginServiceProvider)) {
                $this->app->register($pluginServiceProvider);
            }
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
