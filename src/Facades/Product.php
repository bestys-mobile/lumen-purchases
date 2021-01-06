<?php


namespace Bestys\Purchases\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Bestys\Purchases\Product googlePlay()
 * @method static \Bestys\Purchases\Product appStore()
 */
class Product extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'product';
    }
}
