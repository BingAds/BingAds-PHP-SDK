<?php
// Generated on 7/10/2017 3:08:15 PM

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Defines a predicate for the list of insertion orders returned using the SearchInsertionOrders operation.
     * @link http://msdn.microsoft.com/en-us/library/dn743756(v=msads.110).aspx Predicate Data Object
     * 
     * @uses PredicateOperator
     * @used-by SearchInsertionOrdersRequest
     */
    final class Predicate
    {
        /**
         * The name of the element for the object you are searching.
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
