<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/distributecoupons?view=bingads-13 DistributeCoupons Request Object
     * 
     * @used-by BingAdsCustomerBillingService::DistributeCoupons
     */
    final class DistributeCouponsRequest
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $AccountIds;

        /**
         * Reserved.
         * @var string
         */
        public $ClassName;

        /**
         * Reserved.
         * @var integer
         */
        public $FeatureId;

        /**
         * Reserved.
         * @var boolean
         */
        public $SendNotification;
    }
}
