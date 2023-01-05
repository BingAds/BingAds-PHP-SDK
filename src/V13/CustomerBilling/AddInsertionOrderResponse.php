<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Adds an insertion order to the specified account.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/addinsertionorder?view=bingads-13 AddInsertionOrder Response Object
     * 
     * @used-by BingAdsCustomerBillingService::AddInsertionOrder
     */
    final class AddInsertionOrderResponse
    {
        /**
         * A long value that represents the identifier for the insertion order that was added.
         * @var integer
         */
        public $InsertionOrderId;

        /**
         * Identifies the server time in UTC when the insertion order was added.
         * @var \DateTime
         */
        public $CreateTime;
    }
}
