<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Searches for the client links for the customer of the current authenticated user, filtered by the search criteria.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/searchclientlinks?view=bingads-12 SearchClientLinks Response Object
     * 
     * @uses ClientLink
     * @used-by BingAdsCustomerManagementService::SearchClientLinks
     */
    final class SearchClientLinksResponse
    {
        /**
         * The list of client link invitations.
         * @var ClientLink[]
         */
        public $ClientLinks;
    }
}
