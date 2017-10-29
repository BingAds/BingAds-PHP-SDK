<?php

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Defines a paging object for the list of insertion orders returned using the SearchInsertionOrders operation.
     * @link https://docs.microsoft.com/en-us/bingads/customer-billing-service/paging?version=11 Paging Data Object
     * 
     * @used-by SearchInsertionOrdersRequest
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
