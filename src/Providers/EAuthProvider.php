<?php
/**
 * Created by PhpStorm.
 * User: Gábor
 * Date: 2015.06.23.
 * Time: 18:38
 */

namespace Ethereal\Auth\Providers;


use Ethereal\Auth\User;
use Illuminate\Support\ServiceProvider;

class EAuthProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton('Ethereal\Auth\User', function ($app) {
            return new User;
        });

        /**
         * Package merge config
         */
        $this->mergeConfigFrom(
            __DIR__.'/../../config/ethereal-auth.php', 'ethereal-auth'
        );
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {



        /**
         * Package routes
         */
        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/../Http/routes.php';
        }

        /**
         * Package views
         */
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'ethereal-auth');

        $this->publishes([
            __DIR__ . '/../../resources/views' => base_path('resources/views/vendor/ethereal-auth'),
        ],'views');

        /**
         * Package translations
         */
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'ethereal-auth');

        /**
         * Package config
         */
        $this->publishes([
            __DIR__.'/../../config/ethereal-auth.php' => config_path('ethereal-auth.php'),
        ],'config');

        /**
         * Package migrations
         */
        $this->publishes([
            __DIR__.'/../../database/migrations/' => database_path('/migrations')
        ], 'migrations');
    }
}