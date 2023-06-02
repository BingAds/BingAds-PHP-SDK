<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the specified ad groups in a campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateadgroups?view=bingads-13 UpdateAdGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateAdGroups
     */
    final class UpdateAdGroupsResponse
    {
        /**
         * Reserved for future use.
         * @var string[]
         */
        public $InheritedBidStrategyTypes;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
