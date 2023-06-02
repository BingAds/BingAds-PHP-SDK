<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Gets the amount spent by the account in the specified month.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/getaccountmonthlyspend?view=bingads-13 GetAccountMonthlySpend Response Object
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
