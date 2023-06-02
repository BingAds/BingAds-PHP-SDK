<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addaudiencegroups?view=bingads-13 AddAudienceGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddAudienceGroups
     */
    final class AddAudienceGroupsResponse
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $AudienceGroupIds;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
