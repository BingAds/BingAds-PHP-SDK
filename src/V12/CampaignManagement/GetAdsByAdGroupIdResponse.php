<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Retrieves the ads within an ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getadsbyadgroupid?view=bingads-12 GetAdsByAdGroupId Response Object
     * 
     * @uses Ad
     * @used-by BingAdsCampaignManagementService::GetAdsByAdGroupId
     */
    final class GetAdsByAdGroupIdResponse
    {
        /**
         * The list of ads that have been retrieved.
         * @var Ad[]
         */
        public $Ads;
    }
}
