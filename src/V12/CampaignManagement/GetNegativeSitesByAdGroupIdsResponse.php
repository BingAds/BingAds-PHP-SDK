<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the negative site URLs of the specified ad groups.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getnegativesitesbyadgroupids?view=bingads-12 GetNegativeSitesByAdGroupIds Response Object
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
