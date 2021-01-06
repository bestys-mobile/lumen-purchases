<?php


namespace Bestys\Purchases\Contracts;

/**
 * Interface PurchaseEventContract
 * @package Bestys\Purchases\Events\Contracts
 */
interface PurchaseEventContract
{
    /**
     * @return ServerNotificationContract
     */
    public function getServerNotification(): ServerNotificationContract;
}
