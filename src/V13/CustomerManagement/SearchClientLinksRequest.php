<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Searches for the client links for the customer of the current authenticated user, filtered by the search criteria.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/searchclientlinks?view=bingads-13 SearchClientLinks Request Object
     * 
     * @uses Predicate
     * @uses OrderBy
     * @uses Paging
     * @used-by BingAdsCustomerManagementService::SearchClientLinks
     */
    final class SearchClientLinksRequest
    {
        /**
         * Determines the conditions that must be met to return client links.
         * @var Predicate[]
         */
        public $Predicates;

        /**
         * Determines the order of results.
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
