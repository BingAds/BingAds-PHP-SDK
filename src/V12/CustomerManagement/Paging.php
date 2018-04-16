<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Defines a paging object for the list of entities returned using one of the search operations, for example SearchAccounts, SearchClientLinks, or SearchCustomers.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/paging?view=bingads-12 Paging Data Object
     * 
     * @used-by SearchAccountsRequest
     * @used-by SearchClientLinksRequest
     * @used-by SearchCustomersRequest
     */
    final class Paging
    {
        /**
         * The zero-based results page index.
         * @var integer
         */
        public $Index;

        /**
         * The page size and the number of results to return in the specified page.
         * @var integer
         */
        public $Size;
    }

}
