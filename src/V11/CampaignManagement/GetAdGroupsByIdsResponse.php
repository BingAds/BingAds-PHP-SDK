<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified ad groups within the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277529(v=msads.110).aspx GetAdGroupsByIds Response Object
     * 
     * @uses AdGroup
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAdGroupsByIds
     */
    final class GetAdGroupsByIdsResponse
    {
        /**
         * The list of ad groups that correspond directly to the ad group identifiers that you specified in the request.
         * @var AdGroup[]
         */
        public $AdGroups;

        /**
         * The list of batch errors that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
