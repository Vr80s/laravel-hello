<?php
namespace Vr80s\LaravelHello;

use Illuminate\Support\ServiceProvider;
use Vr80s\LaravelHello\Services\HelloService as Hello;

class HelloServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('laravel.hello', function($app){
            return new Hello($app);
        });


    }
}