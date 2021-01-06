<?php

use Bestys\Purchases\Events\AppStore\Cancel;
use Bestys\Purchases\Events\AppStore\DidChangeRenewalPref;
use Bestys\Purchases\Events\AppStore\DidChangeRenewalStatus;
use Bestys\Purchases\Events\AppStore\DidFailToRenew;
use Bestys\Purchases\Events\AppStore\DidRecover;
use Bestys\Purchases\Events\AppStore\DidRenew;
use Bestys\Purchases\Events\AppStore\InitialBuy;
use Bestys\Purchases\Events\AppStore\InteractiveRenewal;
use Bestys\Purchases\Events\AppStore\PriceIncreaseConsent;
use Bestys\Purchases\Events\AppStore\Refund;
use Bestys\Purchases\Events\GooglePlay\SubscriptionCanceled;
use Bestys\Purchases\Events\GooglePlay\SubscriptionDeferred;
use Bestys\Purchases\Events\GooglePlay\SubscriptionExpired;
use Bestys\Purchases\Events\GooglePlay\SubscriptionInGracePeriod;
use Bestys\Purchases\Events\GooglePlay\SubscriptionOnHold;
use Bestys\Purchases\Events\GooglePlay\SubscriptionPaused;
use Bestys\Purchases\Events\GooglePlay\SubscriptionPauseScheduleChanged;
use Bestys\Purchases\Events\GooglePlay\SubscriptionPriceChangeConfirmed;
use Bestys\Purchases\Events\GooglePlay\SubscriptionPurchased;
use Bestys\Purchases\Events\GooglePlay\SubscriptionRecovered;
use Bestys\Purchases\Events\GooglePlay\SubscriptionRenewed;
use Bestys\Purchases\Events\GooglePlay\SubscriptionRestarted;
use Bestys\Purchases\Events\GooglePlay\SubscriptionRevoked;

return [
    'routing' => [],

    'google_play_package_name' => env('GOOGLE_PLAY_PACKAGE_NAME', 'com.example.name'),

    'appstore_sandbox' => env('APPSTORE_SANDBOX', true),

    'appstore_password' => env('APPSTORE_PASSWORD', ''),

    'eventListeners' => [
        /**
         * --------------------------------------------------------
         * Google Play Events
         * --------------------------------------------------------
         */
        SubscriptionPurchased::class => [],
        SubscriptionRenewed::class => [],
        SubscriptionInGracePeriod::class => [],
        SubscriptionExpired::class => [],
        SubscriptionCanceled::class => [],
        SubscriptionPaused::class => [],
        SubscriptionRestarted::class => [],
        SubscriptionDeferred::class => [],
        SubscriptionRevoked::class => [],
        SubscriptionOnHold::class => [],
        SubscriptionRecovered::class => [],
        SubscriptionPauseScheduleChanged::class => [],
        SubscriptionPriceChangeConfirmed::class => [],

        /**
         * --------------------------------------------------------
         * Appstore Events
         * --------------------------------------------------------
         */
        Cancel::class => [],
        DidChangeRenewalPref::class => [],
        DidChangeRenewalStatus::class => [],
        DidFailToRenew::class => [],
        DidRecover::class => [],
        DidRenew::class => [],
        InitialBuy::class => [],
        InteractiveRenewal::class => [],
        PriceIncreaseConsent::class => [],
        Refund::class => [],
    ],
];
