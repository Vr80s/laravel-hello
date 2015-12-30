<?php
namespace Vr80s\LaravelHello;

use Illuminate\Support\ServiceProvider;
use Vr80s\LaravelHello\Console\Commands\CreateSampleCommand;
use Vr80s\LaravelHello\Services\HelloService as Hello;

class HelloServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('laravel.hello', function(){
            return new Hello();
        });

        $this->app->singleton('command.laravel.hello', function($app){
            return new CreateSampleCommand($app);
        });

        $this->commands('command.laravel.hello');

//        $this->app->bind('laravel.hello1', function($app){
//            return new Hello($app);
//        });

//        $this->app->bindShared('laravel.hello', function($app){
//            return new Hello($app);
//        });

//        $this->app->bindShared('laravel.hello', function($app){
//            return new Hello($app);
//        });

//        $this->app['laravel.hello'] = $this->app->share(function($app){
//            return new Hello($app);
//        });

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'command.laravel.hello',
        ];
    }
}