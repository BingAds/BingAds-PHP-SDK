<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Creates a new account within an existing customer.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/addaccount?view=bingads-13 AddAccount Request Object
     * 
     * @uses AdvertiserAccount
     * @used-by BingAdsCustomerManagementService::AddAccount
     */
    final class AddAccountRequest
    {
        /**
         * The account that you want to add to the existing customer.
         * @var AdvertiserAccount
         */
        public $Account;
    }
}
