<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines the RedeemCoupon Service Operation.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/redeemcoupon?view=bingads-13 RedeemCoupon Request Object
     * 
     * @used-by BingAdsCustomerBillingService::RedeemCoupon
     */
    final class RedeemCouponRequest
    {
        /**
         * Reserved.
         * @var integer
         */
        public $AccountId;

        /**
         * Reserved.
         * @var string
         */
        public $CouponCode;
    }
}
