<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Gets information about coupons associated with a customer ID.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/getcouponinfo?view=bingads-13 GetCouponInfo Request Object
     * 
     * @used-by BingAdsCustomerBillingService::GetCouponInfo
     */
    final class GetCouponInfoRequest
    {
        /**
         * The customer ID.
         * @var integer
         */
        public $CustomerId;
    }
}
