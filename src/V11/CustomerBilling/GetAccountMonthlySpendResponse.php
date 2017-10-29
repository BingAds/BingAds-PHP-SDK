<?php

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Gets the amount spent by the account in the specified month.
     * @link https://docs.microsoft.com/en-us/bingads/customer-billing-service/getaccountmonthlyspend?version=11 GetAccountMonthlySpend Response Object
     * 
     * @used-by BingAdsCustomerBillingService::GetAccountMonthlySpend
     */
    final class GetAccountMonthlySpendResponse
    {
        /**
         * The amount spent by the account in the specified period.
         * @var double
         */
        public $Amount;
    }
}
