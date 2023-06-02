<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Searches for coupons that match a specified criteria.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/searchcoupons?view=bingads-13 SearchCoupons Request Object
     * 
     * @uses Predicate
     * @uses OrderBy
     * @uses Paging
     * @used-by BingAdsCustomerBillingService::SearchCoupons
     */
    final class SearchCouponsRequest
    {
        /**
         * Determines the request conditions.
         * @var Predicate[]
         */
        public $Predicates;

        /**
         * Determines the order of results by the specified property of a coupon.
         * @var OrderBy[]
         */
        public $Ordering;

        /**
         * Determines the index and size of results per page.
         * @var Paging
         */
        public $PageInfo;
    }
}
