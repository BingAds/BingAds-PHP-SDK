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
         * Reserved.
         * @var OperationError[][]
         */
        public $PartialErrors;
    }
}
