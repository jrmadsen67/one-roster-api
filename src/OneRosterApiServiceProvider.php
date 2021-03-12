<?php

namespace Jrmadsen67\OneRosterApi;

use Illuminate\Support\ServiceProvider;

class OneRosterApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'one-roster-api');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'one-roster-api');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('one-roster-api.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/one-roster-api'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/one-roster-api'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/one-roster-api'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'one-roster-api');

        $this->app->bind(OneRosterApi::class, function () {
            // if we're not on production then swap out the real autopilot for the dummy one
            return $this->app->environment() === 'production' ?
                app(OneRosterApiClient::class) :
                app(OneRosterApiMock::class);
        });
    }
}
