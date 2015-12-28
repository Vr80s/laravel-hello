<?php
namespace Vr80s\LaravelHello\Facades;

use Illuminate\Support\Facades\Facade;

class Hello extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'laravel.hello';
    }
}
