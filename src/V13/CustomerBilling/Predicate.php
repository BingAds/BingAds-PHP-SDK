<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines a predicate for the list of insertion orders returned using the SearchInsertionOrders operation.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/predicate?view=bingads-13 Predicate Data Object
     * 
     * @uses PredicateOperator
     * @used-by SearchCouponsRequest
     * @used-by SearchInsertionOrdersRequest
     */
    final class Predicate
    {
        /**
         * The name of the element for  the object you are searching.
         * @var string
         */
        public $Field;

        /**
         * Defines the relationship between the field and the value.
         * @var PredicateOperator
         */
        public $Operator;

        /**
         * The string to search in the specified field.
         * @var string
         */
        public $Value;
    }

}
