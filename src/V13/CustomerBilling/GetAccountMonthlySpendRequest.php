<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Gets the amount spent by the account in the specified month.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/getaccountmonthlyspend?view=bingads-13 GetAccountMonthlySpend Request Object
     * 
     * @used-by BingAdsCustomerBillingService::GetAccountMonthlySpend
     */
    final class GetAccountMonthlySpendRequest
    {
        /**
         * The identifier of the account that contains the spend information to get.
         * @var integer
         */
        public $AccountId;

        /**
         * The month and year for which you want to get the monthly spend information (the operation ignores the day and time values).
         * @var \DateTime
         */
        public $MonthYear;
    }
}
