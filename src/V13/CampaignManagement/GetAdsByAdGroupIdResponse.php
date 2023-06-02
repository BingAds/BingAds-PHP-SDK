<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves the ads within an ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getadsbyadgroupid?view=bingads-13 GetAdsByAdGroupId Response Object
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
