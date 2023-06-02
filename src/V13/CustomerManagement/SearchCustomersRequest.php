<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Searches for customers that match the request criteria.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/searchcustomers?view=bingads-13 SearchCustomers Request Object
     * 
     * @uses Predicate
     * @uses DateRange
     * @uses OrderBy
     * @uses Paging
     * @used-by BingAdsCustomerManagementService::SearchCustomers
     */
    final class SearchCustomersRequest
    {
        /**
         * Determines the conditions that all must be met to return customers.
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
         * Determines the index and size of  results per page.
         * @var Paging
         */
        public $PageInfo;
    }
}
