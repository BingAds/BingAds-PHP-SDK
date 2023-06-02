<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Updates the personal and business contact information about a Microsoft Advertising user.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/updateuser?view=bingads-13 UpdateUser Response Object
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
