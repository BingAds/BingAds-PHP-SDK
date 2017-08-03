<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Updates the details of the specified user.
     * @link http://msdn.microsoft.com/en-us/library/dn451277(v=msads.110).aspx UpdateUser Request Object
     * 
     * @uses User
     * @used-by BingAdsCustomerManagementService::UpdateUser
     */
    final class UpdateUserRequest
    {
        /**
         * The user object that contains the updated user information.
         * @var User
         */
        public $User;
    }
}
