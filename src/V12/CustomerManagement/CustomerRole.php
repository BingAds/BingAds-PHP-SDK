<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Defines the role a user has for one customer or list of accounts within a customer.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/customerrole?view=bingads-12 CustomerRole Data Object
     * 
     * @used-by GetUserResponse
     */
    final class CustomerRole
    {
        /**
         * The role that the user has for each customer or list of accounts.
         * @var integer
         */
        public $RoleId;

        /**
         * The identifier of the Customer that the user can access.
         * @var integer
         */
        public $CustomerId;

        /**
         * The list of accounts that the user can access in the customer.
         * @var integer[]
         */
        public $AccountIds;
    }

}
