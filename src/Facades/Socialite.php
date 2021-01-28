<?php

namespace LarvaCMS\Socialite\Facades;

use Illuminate\Support\Facades\Facade;
use LarvaCMS\Socialite\Contracts\Factory;

/**
 * @method static \LarvaCMS\Socialite\Contracts\Provider driver(string $driver = null)
 * @see \LarvaCMS\Socialite\SocialiteManager
 */
class Socialite extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return Factory::class;
    }
}
