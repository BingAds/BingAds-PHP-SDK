<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates the specified ad groups in a campaign.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updateadgroups?view=bingads-11 UpdateAdGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateAdGroups
     */
    final class UpdateAdGroupsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
