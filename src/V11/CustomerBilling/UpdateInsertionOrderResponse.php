<?php

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Updates an insertion order within the specified account.
     * @link https://docs.microsoft.com/en-us/bingads/customer-billing-service/updateinsertionorder?version=11 UpdateInsertionOrder Response Object
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
