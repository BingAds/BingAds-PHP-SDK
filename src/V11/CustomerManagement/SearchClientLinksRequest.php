<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * This feature is not supported in sandbox.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/searchclientlinks?view=bingads-11 SearchClientLinks Request Object
     * 
     * @uses Predicate
     * @uses OrderBy
     * @uses Paging
     * @used-by BingAdsCustomerManagementService::SearchClientLinks
     */
    final class SearchClientLinksRequest
    {
        /**
         * Determines the request conditions.
         * @var Predicate[]
         */
        public $Predicates;

        /**
         * Determines the order of results.
         * @var OrderBy[]
         */
        public $Ordering;

        /**
         * Determines the index and size of  results per page.
         * @var Paging
         */
        public $PageInfo;
    }
}
