<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Updates the status of the specified client links.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/updateclientlinks?view=bingads-13 UpdateClientLinks Request Object
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
