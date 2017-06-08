<?php
// Generated on 6/7/2017 5:55:25 AM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Updates the status of the specified client links.
     * @link http://msdn.microsoft.com/en-us/library/dn632185(v=msads.110).aspx UpdateClientLinks Request Object
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
