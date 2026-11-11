<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Updates billing group accounts.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/updatebillinggroupaccounts?view=bingads-13 UpdateBillingGroupAccounts Response Object
     * 
     * @uses OperationError
     * @used-by BingAdsCustomerBillingService::UpdateBillingGroupAccounts
     */
    final class UpdateBillingGroupAccountsResponse
    {
        /**
         * An array of operation errors that contains details for any accounts that could not be added to the billing group.
         * @var OperationError[][]
         */
        public $PartialErrors;
    }
}
