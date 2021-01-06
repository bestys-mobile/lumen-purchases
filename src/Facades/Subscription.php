<?php


namespace Bestys\Purchases\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Bestys\Purchases\Subscription googlePlay()
 * @method static \Bestys\Purchases\Subscription appStore()
 */
class Subscription extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'subscription';
    }
}
