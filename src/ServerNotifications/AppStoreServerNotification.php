<?php


namespace Bestys\Purchases\ServerNotifications;

use Bestys\AppStore\ServerNotifications\ServerNotification;
use Bestys\AppStore\ValueObjects\ReceiptInfo;
use Bestys\Purchases\Contracts\ServerNotificationContract;
use Bestys\Purchases\Contracts\SubscriptionContract;
use Bestys\Purchases\Subscriptions\AppStoreSubscription;

class AppStoreServerNotification implements ServerNotificationContract
{
    /**
     * @var ServerNotification
     */
    private $notification;

    /**
     * AppStoreServerNotification constructor.
     * @param ServerNotification $notification
     */
    public function __construct(ServerNotification $notification)
    {
        $this->notification = $notification;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->notification->getNotificationType();
    }

    /**
     * @return SubscriptionContract
     */
    public function getSubscription(): SubscriptionContract
    {
        return new AppStoreSubscription($this->getFirstReceipt());
    }

    /**
     * @return bool
     */
    public function isTest(): bool
    {
        return false;
    }

    /**
     * @return ReceiptInfo
     */
    private function getFirstReceipt(): ReceiptInfo
    {
        return $this->notification->getUnifiedReceipt()->getLatestReceiptInfo()[0];
    }
}
