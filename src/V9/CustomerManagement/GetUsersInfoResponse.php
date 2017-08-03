<?php

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Gets a list of objects that contains user identification information, for example the user name and identifier of the user.
     * @link http://msdn.microsoft.com/en-us/library/dn451283(v=msads.90).aspx GetUsersInfo Response Object
     * 
     * @uses UserInfo
     * @used-by BingAdsCustomerManagementService::GetUsersInfo
     */
    final class GetUsersInfoResponse
    {
        /**
         * A list of UserInfo objects that identifies the list of users who meet the filter criteria.
         * @var UserInfo[]
         */
        public $UsersInfo;
    }
}
