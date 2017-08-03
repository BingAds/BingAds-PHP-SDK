<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Deletes one or more website-placement bids from an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236315(v=msads.100).aspx DeleteSitePlacements Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteSitePlacements
     */
    final class DeleteSitePlacementsRequest
    {
        /**
         * The identifier of the ad group from which to delete the website placement bids.
         * @var integer
         */
        public $AdGroupId;

        /**
         * An array of long values that specifies the site placement bids to be removed.
         * @var integer[]
         */
        public $SitePlacementIds;
    }
}
