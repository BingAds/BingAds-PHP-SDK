<?php
// Generated on 12/5/2016 5:47:05 AM

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Gets the details of an account.
     * @link http://msdn.microsoft.com/en-us/library/dn451273(v=msads.90).aspx GetAccount Response Object
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
