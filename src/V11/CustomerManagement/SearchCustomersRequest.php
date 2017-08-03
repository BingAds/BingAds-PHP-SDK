<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Searches for customers that match a specified criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn452055(v=msads.110).aspx SearchCustomers Request Object
     * 
     * @uses ApplicationType
     * @uses Predicate
     * @uses DateRange
     * @uses OrderBy
     * @uses Paging
     * @used-by BingAdsCustomerManagementService::SearchCustomers
     */
    final class SearchCustomersRequest
    {
        /**
         * A value that determines whether to return results for advertising customers or publishing customers.
         * @var ApplicationType
         */
        public $ApplicationScope;

        /**
         * Determines the request conditions.
         * @var Predicate[]
         */
        public $Predicates;

        /**
         * Determines the minimum and maximum customer creation date range.
         * @var DateRange
         */
        public $DateRange;

        /**
         * Determines the order of results by the specified property of a customer.
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
