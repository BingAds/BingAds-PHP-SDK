<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Retrieves all the website-placement bids from the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277535(v=msads.100).aspx GetSitePlacementsByAdGroupId Response Object
     * 
     * @uses SitePlacement
     * @used-by BingAdsCampaignManagementService::GetSitePlacementsByAdGroupId
     */
    final class GetSitePlacementsByAdGroupIdResponse
    {
        /**
         * An array of SitePlacement objects that was successfully retrieved.
         * @var SitePlacement[]
         */
        public $SitePlacements;
    }
}
