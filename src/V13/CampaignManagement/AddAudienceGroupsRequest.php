<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds array of audience groups to the account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addaudiencegroups?view=bingads-13 AddAudienceGroups Request Object
     * 
     * @uses AudienceGroup
     * @used-by BingAdsCampaignManagementService::AddAudienceGroups
     */
    final class AddAudienceGroupsRequest
    {
        /**
         * Array of audience groups.
         * @var AudienceGroup[]
         */
        public $AudienceGroups;
    }
}
