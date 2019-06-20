<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Updates the details of the specified user.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/updateuser?view=bingads-13 UpdateUser Response Object
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
