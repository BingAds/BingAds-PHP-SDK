<?php

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Defines a predicate for the list of entities requested using one of the search operations, for example SearchAccounts, SearchClientLinks, or SearchCustomers.
     * @link http://msdn.microsoft.com/en-us/library/dn452060(v=msads.90).aspx Predicate Data Object
     * 
     * @uses PredicateOperator
     * @used-by SearchAccountsRequest
     * @used-by SearchClientLinksRequest
     * @used-by SearchCustomersRequest
     * @used-by SearchUserInvitationsRequest
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
