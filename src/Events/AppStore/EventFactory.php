<?php


namespace Bestys\Purchases\Events\AppStore;

use Illuminate\Support\Str;
use Bestys\Purchases\Contracts\PurchaseEventContract;
use Bestys\Purchases\Contracts\ServerNotificationContract;

class EventFactory
{
    /**
     * @param ServerNotificationContract $notification
     * @return PurchaseEventContract
     */
    public static function create(ServerNotificationContract $notification): PurchaseEventContract
    {
        $type = $notification->getType();
        $className = "\Bestys\Purchases\Events\AppStore\\" . ucfirst(Str::camel(strtolower($type)));

        return new $className($notification);
    }
}
