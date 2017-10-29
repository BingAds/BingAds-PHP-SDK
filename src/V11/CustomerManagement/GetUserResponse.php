<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Gets the details of a user.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/getuser?version=11 GetUser Response Object
     * 
     * @uses User
     * @used-by BingAdsCustomerManagementService::GetUser
     */
    final class GetUserResponse
    {
        /**
         * A user object that contains information about the user.
         * @var User
         */
        public $User;

        /**
         * An array of roles that determines the permissions that the user has to manage the customer or account data.
         * @var integer[]
         */
        public $Roles;

        /**
         * An array of identifiers of the accounts to which the user has access permissions.
         * @var integer[]
         */
        public $Accounts;

        /**
         * An array of identifiers of the customers to which the user has access permissions.
         * @var integer[]
         */
        public $Customers;
    }
}
