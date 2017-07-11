<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the ad groups within the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277524(v=msads.110).aspx GetAdGroupsByCampaignId Response Object
     * 
     * @uses AdGroup
     * @used-by BingAdsCampaignManagementService::GetAdGroupsByCampaignId
     */
    final class GetAdGroupsByCampaignIdResponse
    {
        /**
         * The list of ad groups within the specified campaign.
         * @var AdGroup[]
         */
        public $AdGroups;
    }
}
