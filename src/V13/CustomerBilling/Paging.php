<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines a paging object to request Customer Billing objects in batches.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/paging?view=bingads-13 Paging Data Object
     * 
     * @used-by SearchCouponsRequest
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
