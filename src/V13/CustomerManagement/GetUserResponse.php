<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets the details of a user.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/getuser?view=bingads-13 GetUser Response Object
     * 
     * @uses User
     * @uses CustomerRole
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
         * The list of roles that a user has for each customer or list of accounts.
         * @var CustomerRole[]
         */
        public $CustomerRoles;
    }
}
