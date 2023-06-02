<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Adds an insertion order to the specified account.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/addinsertionorder?view=bingads-13 AddInsertionOrder Request Object
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
