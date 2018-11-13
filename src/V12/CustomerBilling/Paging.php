<?php

namespace Microsoft\BingAds\V12\CustomerBilling;

{
    /**
     * Defines a paging object that you can use to request objects in batches.
     * @link https://docs.microsoft.com/en-us/bingads/customer-billing-service/paging?view=bingads-12 Paging Data Object
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
