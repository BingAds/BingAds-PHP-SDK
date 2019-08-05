<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Searches for accounts that match the request criteria.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/searchaccounts?view=bingads-13 SearchAccounts Request Object
     * 
     * @uses Predicate
     * @uses OrderBy
     * @uses Paging
     * @used-by BingAdsCustomerManagementService::SearchAccounts
     */
    final class SearchAccountsRequest
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
