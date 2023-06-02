<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the negative sites URLs that are assigned directly to ad groups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getnegativesitesbyadgroupids?view=bingads-13 GetNegativeSitesByAdGroupIds Response Object
     * 
     * @uses AdGroupNegativeSites
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetNegativeSitesByAdGroupIds
     */
    final class GetNegativeSitesByAdGroupIdsResponse
    {
        /**
         * An array of AdGroupNegativeSites that corresponds directly to the ad group identifiers that you specified in the request.
         * @var AdGroupNegativeSites[]
         */
        public $AdGroupNegativeSites;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
