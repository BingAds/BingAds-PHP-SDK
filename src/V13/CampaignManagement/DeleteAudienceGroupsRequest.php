<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes one or more AudienceGroups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteaudiencegroups?view=bingads-13 DeleteAudienceGroups Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteAudienceGroups
     */
    final class DeleteAudienceGroupsRequest
    {
        /**
         * Array of audience group IDs to be deleted.
         * @var integer[]
         */
        public $AudienceGroupIds;
    }
}
