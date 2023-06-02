<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Searches for accounts that match the request criteria.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/searchaccounts?view=bingads-13 SearchAccounts Request Object
     * 
     * @uses Predicate
     * @uses OrderBy
     * @uses Paging
     * @uses AccountAdditionalField
     * @used-by BingAdsCustomerManagementService::SearchAccounts
     */
    final class SearchAccountsRequest
    {
        /**
         * Determines the conditions that all must be met to return accounts.
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

        /**
         * The list of additional properties that you want included within each returned account.
         * @var AccountAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
