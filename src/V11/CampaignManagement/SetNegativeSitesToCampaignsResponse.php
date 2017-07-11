<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Sets the negative site URLs of the specified campaigns.
     * @link http://msdn.microsoft.com/en-us/library/dn277504(v=msads.110).aspx SetNegativeSitesToCampaigns Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::SetNegativeSitesToCampaigns
     */
    final class SetNegativeSitesToCampaignsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
