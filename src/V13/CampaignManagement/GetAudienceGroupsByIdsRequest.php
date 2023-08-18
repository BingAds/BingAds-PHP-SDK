<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves specified AudienceGroups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getaudiencegroupsbyids?view=bingads-13 GetAudienceGroupsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetAudienceGroupsByIds
     */
    final class GetAudienceGroupsByIdsRequest
    {
        /**
         * Array of audience group ids to get.
         * @var integer[]
         */
        public $AudienceGroupIds;
    }
}
