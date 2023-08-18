<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes one or more AudienceGroups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteaudiencegroups?view=bingads-13 DeleteAudienceGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAudienceGroups
     */
    final class DeleteAudienceGroupsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
