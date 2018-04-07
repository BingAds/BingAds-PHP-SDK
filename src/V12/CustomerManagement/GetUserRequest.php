<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Gets the details of a user.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/getuser?view=bingads-12 GetUser Request Object
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
    }
}
