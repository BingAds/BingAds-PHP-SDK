<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines the SearchCoupons Service Operation.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/searchcoupons?view=bingads-13 SearchCoupons Response Object
     * 
     * @uses Coupon
     * @used-by BingAdsCustomerBillingService::SearchCoupons
     */
    final class SearchCouponsResponse
    {
        /**
         * Reserved.
         * @var Coupon[]
         */
        public $Coupons;
    }
}
