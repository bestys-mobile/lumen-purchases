<?php


namespace Bestys\Purchases\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Bestys\Purchases\Contracts\PurchaseEventContract;
use Bestys\Purchases\Contracts\ServerNotificationContract;
use Bestys\Purchases\Contracts\SubscriptionContract;

abstract class PurchaseEvent implements PurchaseEventContract
{
    use Dispatchable, SerializesModels;

    /**
     * @var ServerNotificationContract
     */
    private $serverNotification;

    /**
     * SubscriptionPurchased constructor.
     * @param ServerNotificationContract $serverNotification
     */
    public function __construct(ServerNotificationContract $serverNotification)
    {
        $this->serverNotification = $serverNotification;
    }

    /**
     * @return ServerNotificationContract
     */
    public function getServerNotification(): ServerNotificationContract
    {
        return $this->serverNotification;
    }

    /**
     * @return SubscriptionContract
     */
    public function getSubscription(): SubscriptionContract
    {
        return $this->serverNotification->getSubscription();
    }

    /**
     * @return string
     */
    public function getSubscriptionId(): string
    {
        return $this->getSubscription()->getItemId();
    }

    /**
     * @return string
     */
    public function getSubscriptionIdentifier(): string
    {
        return $this->getSubscription()->getUniqueIdentifier();
    }
}
