<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Updates one or more website-placement bids in an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236298(v=msads.100).aspx UpdateSitePlacements Request Object
     * 
     * @uses SitePlacement
     * @used-by BingAdsCampaignManagementService::UpdateSitePlacements
     */
    final class UpdateSitePlacementsRequest
    {
        /**
         * The identifier of the ad group that the placement bids to be updated belong to.
         * @var integer
         */
        public $AdGroupId;

        /**
         * An array of SitePlacement objects that contains the updated website placement bid information.
         * @var SitePlacement[]
         */
        public $SitePlacements;
    }
}
