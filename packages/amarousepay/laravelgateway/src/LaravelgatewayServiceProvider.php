<?php

namespace Amarousepay\Laravelgateway;

use Illuminate\Support\ServiceProvider;

class LaravelgatewayServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'amarousepay');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'laravelgateway');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravelgateway.php', 'laravelgateway');

        // Register the service the package provides.
        $this->app->singleton('laravelgateway', function ($app) {
            return new Laravelgateway;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravelgateway'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/laravelgateway.php' => config_path('laravelgateway.php'),
        ], 'laravelgateway.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/amarousepay'),
        ], 'laravelgateway.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/amarousepay'),
        ], 'laravelgateway.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/amarousepay'),
        ], 'laravelgateway.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
