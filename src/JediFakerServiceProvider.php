<?php

namespace HydrefLab\Laravel\JediFaker;

use Faker\Generator as FakerGenerator;
use HydrefLab\JediFaker\Factory;
use Illuminate\Support\ServiceProvider;

class JediFakerServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * @return void
     */
    public function register()
    {
        $this->app->singleton(FakerGenerator::class, function ($app) {
            return Factory::create($app['config']->get('app.faker_locale', 'en_US'));
        });
    }
}