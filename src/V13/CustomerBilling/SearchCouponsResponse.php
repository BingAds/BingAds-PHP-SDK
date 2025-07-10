<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Searches for coupons that match a specified criteria from within the set of coupons where the supplied customerID is identified as the ownerCustomer.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/searchcoupons?view=bingads-13 SearchCoupons Response Object
     * 
     * @uses Coupon
     * @used-by BingAdsCustomerBillingService::SearchCoupons
     */
    final class SearchCouponsResponse
    {
        /**
         * A list of coupons that meet the specified criteria.
         * @var Coupon[]
         */
        public $Coupons;
    }
}
