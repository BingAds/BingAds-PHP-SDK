<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the negative site URLs of the specified ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn277521(v=msads.110).aspx GetNegativeSitesByAdGroupIds Response Object
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
