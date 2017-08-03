<?php

namespace Microsoft\BingAds\V9\CustomerBilling;

{
    /**
     * Gets the amount spent by the account in the specified month.
     * @link http://msdn.microsoft.com/en-us/library/dn451264(v=msads.90).aspx GetAccountMonthlySpend Response Object
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
