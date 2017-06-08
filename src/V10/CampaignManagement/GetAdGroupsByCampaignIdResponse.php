<?php
// Generated on 6/7/2017 5:54:10 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the ad groups that exist within a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277524(v=msads.100).aspx GetAdGroupsByCampaignId Response Object
     * 
     * @uses AdGroup
     * @used-by BingAdsCampaignManagementService::GetAdGroupsByCampaignId
     */
    final class GetAdGroupsByCampaignIdResponse
    {
        /**
         * An array of AdGroup objects that represents the retrieved ad groups.
         * @var AdGroup[]
         */
        public $AdGroups;
    }
}
