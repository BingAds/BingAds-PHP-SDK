<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Updates the roles of the specified user.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/updateuserroles?view=bingads-13 UpdateUserRoles Response Object
     * 
     * @used-by BingAdsCustomerManagementService::UpdateUserRoles
     */
    final class UpdateUserRolesResponse
    {
        /**
         * The date and time that the user roles were last updated.
         * @var \DateTime
         */
        public $LastModifiedTime;
    }
}
