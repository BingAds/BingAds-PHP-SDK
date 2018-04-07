<?php

namespace Microsoft\BingAds\V12\CustomerBilling;

{
    /**
     * Adds an insertion order to the specified account.
     * @link https://docs.microsoft.com/en-us/bingads/customer-billing-service/addinsertionorder?view=bingads-12 AddInsertionOrder Request Object
     * 
     * @uses InsertionOrder
     * @used-by BingAdsCustomerBillingService::AddInsertionOrder
     */
    final class AddInsertionOrderRequest
    {
        /**
         * An insertion order to add to the account.
         * @var InsertionOrder
         */
        public $InsertionOrder;
    }
}
