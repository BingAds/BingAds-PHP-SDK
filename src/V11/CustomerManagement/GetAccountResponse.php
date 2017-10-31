<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Gets the details of an account.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/getaccount?view=bingads-11 GetAccount Response Object
     * 
     * @uses Account
     * @used-by BingAdsCustomerManagementService::GetAccount
     */
    final class GetAccountResponse
    {
        /**
         * An account object that contains information about the account, such as payment method, account type, and parent customer.
         * @var Account
         */
        public $Account;
    }
}
