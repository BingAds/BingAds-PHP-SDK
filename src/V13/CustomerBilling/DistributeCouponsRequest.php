<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Distribute coupons of the specified coupon class name to the specified accounts.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/distributecoupons?view=bingads-13 DistributeCoupons Request Object
     * 
     * @used-by BingAdsCustomerBillingService::DistributeCoupons
     */
    final class DistributeCouponsRequest
    {
        /**
         * The account IDs.
         * @var integer[]
         */
        public $AccountIds;

        /**
         * The class name of the distributed coupons.
         * @var string
         */
        public $ClassName;

        /**
         * The feature ID attached to the coupon.
         * @var integer
         */
        public $FeatureId;

        /**
         * Whether or not a notification is sent.
         * @var boolean
         */
        public $SendNotification;
    }
}
