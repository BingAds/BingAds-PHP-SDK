<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/updatebillinggroupaccounts?view=bingads-13 UpdateBillingGroupAccounts Request Object
     * 
     * @used-by BingAdsCustomerBillingService::UpdateBillingGroupAccounts
     */
    final class UpdateBillingGroupAccountsRequest
    {
        /**
         * Reserved.
         * @var integer
         */
        public $CustomerId;

        /**
         * Reserved.
         * @var integer
         */
        public $BillingGroupId;

        /**
         * Reserved.
         * @var integer[]
         */
        public $AccountsToAdd;
    }
}
