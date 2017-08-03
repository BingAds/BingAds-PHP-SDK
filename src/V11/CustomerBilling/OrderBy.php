<?php

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Defines an order for the list of insertion orders returned using the SearchInsertionOrders operation.
     * @link http://msdn.microsoft.com/en-us/library/dn743752(v=msads.110).aspx OrderBy Data Object
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
