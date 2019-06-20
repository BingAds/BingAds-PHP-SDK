<?php

namespace Microsoft\BingAds\V12\CustomerBilling;

{
    /**
     * Gets a list of insertion orders for the specified account.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/getinsertionordersbyaccount?view=bingads-12 GetInsertionOrdersByAccount Request Object
     * 
     * @used-by BingAdsCustomerBillingService::GetInsertionOrdersByAccount
     */
    final class GetInsertionOrdersByAccountRequest
    {
        /**
         * The identifier of the account that contains the insertion orders to get.
         * @var integer
         */
        public $AccountId;

        /**
         * A list of identifiers of the insertion orders to get.
         * @var integer[]
         */
        public $InsertionOrderIds;
    }
}
