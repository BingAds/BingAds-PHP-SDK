<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Updates an insertion order within the specified account.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/updateinsertionorder?view=bingads-13 UpdateInsertionOrder Request Object
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
