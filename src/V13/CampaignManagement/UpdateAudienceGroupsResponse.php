<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the specified audience groups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateaudiencegroups?view=bingads-13 UpdateAudienceGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateAudienceGroups
     */
    final class UpdateAudienceGroupsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
