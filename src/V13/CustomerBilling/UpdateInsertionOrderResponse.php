<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Updates an insertion order within the specified account.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/updateinsertionorder?view=bingads-13 UpdateInsertionOrder Response Object
     * 
     * @used-by BingAdsCustomerBillingService::UpdateInsertionOrder
     */
    final class UpdateInsertionOrderResponse
    {
        /**
         * Identifies the server time in UTC when the insertion order was last modified.
         * @var \DateTime
         */
        public $LastModifiedTime;
    }
}
