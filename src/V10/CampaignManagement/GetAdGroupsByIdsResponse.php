<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the specified ad groups that exist within a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277529(v=msads.100).aspx GetAdGroupsByIds Response Object
     * 
     * @uses AdGroup
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAdGroupsByIds
     */
    final class GetAdGroupsByIdsResponse
    {
        /**
         * An array of AdGroup objects that corresponds directly to the ad group identifiers that you specified in the request.
         * @var AdGroup[]
         */
        public $AdGroups;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
