<?php

namespace Jrmadsen67\OneRosterApi;

use Illuminate\Support\ServiceProvider;

class OneRosterApiServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/one-roster-api.php', 'one-roster-api');

        $this->app->bind(OneRosterApi::class, function () {
            // if we're not on production then swap out the real autopilot for the dummy one
            return in_array($this->app->environment(), ['production', 'local']) ?
                app(OneRosterApiClient::class) :
                app(OneRosterApiMock::class);
        });
    }
}
