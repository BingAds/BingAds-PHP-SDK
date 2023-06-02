<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Updates the personal and business contact information about a Microsoft Advertising user.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/updateuser?view=bingads-13 UpdateUser Request Object
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
