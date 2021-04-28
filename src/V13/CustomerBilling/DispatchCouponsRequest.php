<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines the DispatchCoupons Service Operation.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/dispatchcoupons?view=bingads-13 DispatchCoupons Request Object
     * 
     * @used-by BingAdsCustomerBillingService::DispatchCoupons
     */
    final class DispatchCouponsRequest
    {
        /**
         * Reserved.
         * @var string[]
         */
        public $SendToEmails;

        /**
         * Reserved.
         * @var integer
         */
        public $CustomerId;

        /**
         * Reserved.
         * @var string
         */
        public $CouponClassName;
    }
}
