<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Initiates the client link process to manage the account of another customer.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/addclientlinks?view=bingads-11 AddClientLinks Request Object
     * 
     * @uses ClientLink
     * @used-by BingAdsCustomerManagementService::AddClientLinks
     */
    final class AddClientLinksRequest
    {
        /**
         * The list of client links to add.
         * @var ClientLink[]
         */
        public $ClientLinks;
    }
}
