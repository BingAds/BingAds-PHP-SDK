<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Retrieves the specified campaigns from the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn236303(v=msads.100).aspx GetCampaignsByIds Response Object
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
