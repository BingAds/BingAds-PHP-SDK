<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the negative site URLs of the specified campaigns.
     * @link http://msdn.microsoft.com/en-us/library/dn277525(v=msads.110).aspx GetNegativeSitesByCampaignIds Response Object
     * 
     * @uses CampaignNegativeSites
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetNegativeSitesByCampaignIds
     */
    final class GetNegativeSitesByCampaignIdsResponse
    {
        /**
         * An array of CampaignNegativeSites that corresponds directly to the campaign identifiers that you specified in the request.
         * @var CampaignNegativeSites[]
         */
        public $CampaignNegativeSites;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
