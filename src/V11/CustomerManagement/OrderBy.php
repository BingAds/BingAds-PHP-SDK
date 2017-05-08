<?php
// Generated on 5/7/2017 5:48:10 AM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines an order for the list of entities returned using one of the search operations, for example SearchAccounts, SearchClientLinks, or SearchCustomers.
     * @link http://msdn.microsoft.com/en-us/library/dn452057(v=msads.110).aspx OrderBy Data Object
     * 
     * @uses OrderByField
     * @uses SortOrder
     * @used-by SearchAccountsRequest
     * @used-by SearchClientLinksRequest
     * @used-by SearchCustomersRequest
     */
    final class OrderBy
    {
        /**
         * Determines the field to order the results.
         * @var OrderByField
         */
        public $Field;

        /**
         * Determines whether the results are ascending or descending.
         * @var SortOrder
         */
        public $Order;
    }

}
