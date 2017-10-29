<?php

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Gets a list of insertion orders for the specified account.
     * @link https://docs.microsoft.com/en-us/bingads/customer-billing-service/getinsertionordersbyaccount?version=11 GetInsertionOrdersByAccount Request Object
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
