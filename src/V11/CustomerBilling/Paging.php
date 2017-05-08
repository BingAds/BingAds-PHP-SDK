<?php
// Generated on 5/7/2017 5:48:14 AM

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Defines a paging object for the list of insertion orders returned using the SearchInsertionOrders operation.
     * @link http://msdn.microsoft.com/en-us/library/dn743749(v=msads.110).aspx Paging Data Object
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
