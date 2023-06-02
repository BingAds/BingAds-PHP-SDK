<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getaudiencegroupsbyids?view=bingads-13 GetAudienceGroupsByIds Response Object
     * 
     * @uses AudienceGroup
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAudienceGroupsByIds
     */
    final class GetAudienceGroupsByIdsResponse
    {
        /**
         * Reserved.
         * @var AudienceGroup[]
         */
        public $AudienceGroups;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
