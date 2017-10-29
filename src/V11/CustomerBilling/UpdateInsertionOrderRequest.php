<?php

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Updates an insertion order within the specified account.
     * @link https://docs.microsoft.com/en-us/bingads/customer-billing-service/updateinsertionorder?version=11 UpdateInsertionOrder Request Object
     * 
     * @uses InsertionOrder
     * @used-by BingAdsCustomerBillingService::UpdateInsertionOrder
     */
    final class UpdateInsertionOrderRequest
    {
        /**
         * An insertion order to update within the account.
         * @var InsertionOrder
         */
        public $InsertionOrder;
    }
}
