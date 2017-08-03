<?php

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Gets the amount spent by the account in the specified month.
     * @link http://msdn.microsoft.com/en-us/library/dn451264(v=msads.110).aspx GetAccountMonthlySpend Request Object
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
