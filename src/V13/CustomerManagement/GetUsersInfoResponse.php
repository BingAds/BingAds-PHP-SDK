<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets a list of objects that contains user identification information, for example the user name and identifier of the user.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/getusersinfo?view=bingads-13 GetUsersInfo Response Object
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
