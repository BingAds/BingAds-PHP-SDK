<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Retrieves ungrouped accounts.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/getungroupedaccounts?view=bingads-13 GetUngroupedAccounts Response Object
     * 
     * @uses UngroupedAccount
     * @used-by BingAdsCustomerBillingService::GetUngroupedAccounts
     */
    final class GetUngroupedAccountsResponse
    {
        /**
         * Reserved.
         * @var UngroupedAccount[]
         */
        public $UngroupedAccounts;
    }
}
