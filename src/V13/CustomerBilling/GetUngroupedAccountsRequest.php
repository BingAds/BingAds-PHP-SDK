<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Retrieves ungrouped accounts.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/getungroupedaccounts?view=bingads-13 GetUngroupedAccounts Request Object
     * 
     * @used-by BingAdsCustomerBillingService::GetUngroupedAccounts
     */
    final class GetUngroupedAccountsRequest
    {
        /**
         * The Microsoft Advertising identifier of the customer whose ungrouped accounts you want to get.
         * @var integer
         */
        public $CustomerId;
    }
}
