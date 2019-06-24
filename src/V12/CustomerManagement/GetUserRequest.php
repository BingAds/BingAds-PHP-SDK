<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Gets the details of a user.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/getuser?view=bingads-12 GetUser Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetUser
     */
    final class GetUserRequest
    {
        /**
         * The identifier of the user to get.
         * @var integer
         */
        public $UserId;

        /**
         * Determines a) whether or not the CustomerRole objects that represent the user's permissions on agency-linked accounts should be returned, and b) whether or not the LinkedAccountIds element should be included in all returned CustomerRole objects.
         * @var boolean
         */
        public $IncludeLinkedAccountIds;
    }
}
