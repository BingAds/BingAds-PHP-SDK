<?php
// Generated on 12/5/2016 5:47:08 AM

namespace Microsoft\BingAds\V9\CustomerBilling;

{
    /**
     * Defines a paging object for the list of insertion orders returned using the SearchInsertionOrders operation.
     * @link http://msdn.microsoft.com/en-us/library/dn743749(v=msads.90).aspx Paging Data Object
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
