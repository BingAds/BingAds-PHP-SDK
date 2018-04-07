<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the ad groups within the specified campaign.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getadgroupsbycampaignid?view=bingads-12 GetAdGroupsByCampaignId Response Object
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
