<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines the SearchCoupons Service Operation.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/searchcoupons?view=bingads-13 SearchCoupons Request Object
     * 
     * @uses Predicate
     * @uses OrderBy
     * @uses Paging
     * @used-by BingAdsCustomerBillingService::SearchCoupons
     */
    final class SearchCouponsRequest
    {
        /**
         * Reserved.
         * @var Predicate[]
         */
        public $Predicates;

        /**
         * Reserved.
         * @var OrderBy[]
         */
        public $Ordering;

        /**
         * Reserved.
         * @var Paging
         */
        public $PageInfo;
    }
}
