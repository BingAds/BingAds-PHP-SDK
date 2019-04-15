<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/getlinkedaccountsandcustomersinfo?view=bingads-13 GetLinkedAccountsAndCustomersInfo Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetLinkedAccountsAndCustomersInfo
     */
    final class GetLinkedAccountsAndCustomersInfoRequest
    {
        /**
         * Reserved.
         * @var integer
         */
        public $CustomerId;

        /**
         * Reserved.
         * @var boolean
         */
        public $OnlyParentAccounts;
    }
}
