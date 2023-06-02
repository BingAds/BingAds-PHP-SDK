<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Searches for insertion orders that match a specified criteria.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/searchinsertionorders?view=bingads-13 SearchInsertionOrders Request Object
     * 
     * @uses Predicate
     * @uses OrderBy
     * @uses Paging
     * @used-by BingAdsCustomerBillingService::SearchInsertionOrders
     */
    final class SearchInsertionOrdersRequest
    {
        /**
         * Determines the request conditions.
         * @var Predicate[]
         */
        public $Predicates;

        /**
         * Determines the order of results by the specified property of an account.
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
