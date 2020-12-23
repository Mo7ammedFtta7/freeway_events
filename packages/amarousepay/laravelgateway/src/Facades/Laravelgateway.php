<?php

namespace Amarousepay\Laravelgateway\Facades;

use Illuminate\Support\Facades\Facade;

class Laravelgateway extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravelgateway';
    }
}
