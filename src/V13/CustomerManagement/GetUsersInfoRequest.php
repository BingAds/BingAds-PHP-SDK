<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets a list of objects that contains user identification information, for example the user name and identifier of the user.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/getusersinfo?view=bingads-13 GetUsersInfo Request Object
     * 
     * @uses UserLifeCycleStatus
     * @used-by BingAdsCustomerManagementService::GetUsersInfo
     */
    final class GetUsersInfoRequest
    {
        /**
         * The identifier of the customer to which the users belong.
         * @var integer
         */
        public $CustomerId;

        /**
         * The status value that the operation uses to filter the list of users that it returns.
         * @var UserLifeCycleStatus
         */
        public $StatusFilter;
    }
}
