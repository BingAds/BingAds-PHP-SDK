<?php
// Generated on 12/5/2016 5:47:08 AM

namespace Microsoft\BingAds\V9\CustomerBilling;

{
    /**
     * Defines an order for the list of insertion orders returned using the SearchInsertionOrders operation.
     * @link http://msdn.microsoft.com/en-us/library/dn743752(v=msads.90).aspx OrderBy Data Object
     * 
     * @uses OrderByField
     * @uses SortOrder
     * @used-by SearchInsertionOrdersRequest
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
