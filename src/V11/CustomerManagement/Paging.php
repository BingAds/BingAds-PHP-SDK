<?php
// Generated on 5/7/2017 5:48:10 AM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines a paging object for the list of entities returned using one of the search operations, for example SearchAccounts, SearchClientLinks, or SearchCustomers.
     * @link http://msdn.microsoft.com/en-us/library/dn452059(v=msads.110).aspx Paging Data Object
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
