<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified campaigns within an account.
     * @link http://msdn.microsoft.com/en-us/library/dn236303(v=msads.110).aspx GetCampaignsByIds Response Object
     * 
     * @uses Campaign
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetCampaignsByIds
     */
    final class GetCampaignsByIdsResponse
    {
        /**
         * An array of Campaign objects that corresponds directly to the campaign identifiers that you specified in the request.
         * @var Campaign[]
         */
        public $Campaigns;

        /**
         * An array of BatchError objects that contain details for any campaigns that were not successfully retrieved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
