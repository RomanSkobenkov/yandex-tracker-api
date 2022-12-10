<?php

namespace YandexTrackerApi\YandexTrackerApi;

use Illuminate\Support\ServiceProvider;
use YandexTrackerApi\YandexTrackerApi\Configuration\ConfigurationInterface;
use YandexTrackerApi\YandexTrackerApi\Configuration\DotEnvConfiguration;

class YandexTrackerApiServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
    }

    /**
     * Register bindings in the container.
     */
    public function register()
    {
        $this->app->bind(ConfigurationInterface::class, function () {
            return new DotEnvConfiguration(base_path());
        });
    }

}