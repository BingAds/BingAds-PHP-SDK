<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the specified audience groups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateaudiencegroups?view=bingads-13 UpdateAudienceGroups Request Object
     * 
     * @uses AudienceGroup
     * @used-by BingAdsCampaignManagementService::UpdateAudienceGroups
     */
    final class UpdateAudienceGroupsRequest
    {
        /**
         * Array of audience groups to update.
         * @var AudienceGroup[]
         */
        public $AudienceGroups;
    }
}
