<?php

namespace Alaidi\WireContent\Facades;

use Alaidi\WireContent\WireContentServiceProvider;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Alaidi\WireContent\WireContent
 */
class WireContent extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return WireContentServiceProvider::class;
    }
}
