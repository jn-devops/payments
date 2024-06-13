<?php

namespace Homeful\Payments\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Homeful\Payments\Payments
 */
class Payments extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Homeful\Payments\Payments::class;
    }
}
