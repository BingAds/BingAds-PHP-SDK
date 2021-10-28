<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines an order for the list of insertion orders returned using one of the search operations, for example SearchCoupons or SearchInsertionOrders.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/orderby?view=bingads-13 OrderBy Data Object
     * 
     * @uses OrderByField
     * @uses SortOrder
     * @used-by SearchCouponsRequest
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
