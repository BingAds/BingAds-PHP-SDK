<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Updates the details of the specified user.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/updateuser?version=11 UpdateUser Response Object
     * 
     * @used-by BingAdsCustomerManagementService::UpdateUser
     */
    final class UpdateUserResponse
    {
        /**
         * The date and time that the user was last updated.
         * @var \DateTime
         */
        public $LastModifiedTime;
    }
}
