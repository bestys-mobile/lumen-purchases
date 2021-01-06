<?php


namespace Bestys\Purchases\Contracts;

/**
 * Interface ServerNotificationContract
 * @package Bestys\Purchases\Events\Contracts
 */
interface ServerNotificationContract
{
    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @return SubscriptionContract
     */
    public function getSubscription(): SubscriptionContract;

    /**
     * @return bool
     */
    public function isTest(): bool;
}
