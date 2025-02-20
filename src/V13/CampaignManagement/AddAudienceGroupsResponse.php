<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds array of audience groups to the account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addaudiencegroups?view=bingads-13 AddAudienceGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddAudienceGroups
     */
    final class AddAudienceGroupsResponse
    {
        /**
         * Array of audience group ids to be added.
         * @var integer[]
         */
        public $AudienceGroupIds;

        /**
         * An array of BatchError objects that contain details for any request items that weren't successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
