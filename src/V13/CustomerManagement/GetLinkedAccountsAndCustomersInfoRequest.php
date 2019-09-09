<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets the customer and account hierarchy under the specified customer.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/getlinkedaccountsandcustomersinfo?view=bingads-13 GetLinkedAccountsAndCustomersInfo Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetLinkedAccountsAndCustomersInfo
     */
    final class GetLinkedAccountsAndCustomersInfoRequest
    {
        /**
         * The identifier of the customer whose hierarchy you want to get.
         * @var integer
         */
        public $CustomerId;

        /**
         * Determines whether to return only the advertiser accounts that belong to the customer or to also return linked customers and linked advertiser accounts under other customers.
         * @var boolean
         */
        public $OnlyParentAccounts;
    }
}
