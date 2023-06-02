<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the ad groups within the specified campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getadgroupsbycampaignid?view=bingads-13 GetAdGroupsByCampaignId Response Object
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
