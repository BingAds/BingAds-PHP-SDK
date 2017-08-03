<?php

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Gets the details of a user.
     * @link http://msdn.microsoft.com/en-us/library/dn451280(v=msads.90).aspx GetUser Request Object
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
