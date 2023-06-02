<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets the details of an account.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/getaccount?view=bingads-13 GetAccount Response Object
     * 
     * @uses AdvertiserAccount
     * @used-by BingAdsCustomerManagementService::GetAccount
     */
    final class GetAccountResponse
    {
        /**
         * An account object that contains information about the account, such as payment method, account type, and parent customer.
         * @var AdvertiserAccount
         */
        public $Account;
    }
}
