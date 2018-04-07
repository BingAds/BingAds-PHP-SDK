<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/addaccount?view=bingads-11 AddAccount Response Object
     * 
     * @used-by BingAdsCustomerManagementService::AddAccount
     */
    final class AddAccountResponse
    {
        /**
         * Reserved.
         * @var integer
         */
        public $AccountId;

        /**
         * Reserved.
         * @var string
         */
        public $AccountNumber;

        /**
         * Reserved.
         * @var \DateTime
         */
        public $CreateTime;
    }
}
