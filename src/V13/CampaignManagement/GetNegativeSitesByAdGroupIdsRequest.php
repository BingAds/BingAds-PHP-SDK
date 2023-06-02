<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the negative sites URLs that are assigned directly to ad groups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getnegativesitesbyadgroupids?view=bingads-13 GetNegativeSitesByAdGroupIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetNegativeSitesByAdGroupIds
     */
    final class GetNegativeSitesByAdGroupIdsRequest
    {
        /**
         * The identifier of the campaign that contains the ad groups.
         * @var integer
         */
        public $CampaignId;

        /**
         * An array of identifiers of the ad groups that contain the negative site URLs that you want to get.
         * @var integer[]
         */
        public $AdGroupIds;
    }
}
