<?php

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Updates the status of the specified client links.
     * @link http://msdn.microsoft.com/en-us/library/dn632185(v=msads.90).aspx UpdateClientLinks Request Object
     * 
     * @uses ClientLink
     * @used-by BingAdsCustomerManagementService::UpdateClientLinks
     */
    final class UpdateClientLinksRequest
    {
        /**
         * The list of client links to update.
         * @var ClientLink[]
         */
        public $ClientLinks;
    }
}
