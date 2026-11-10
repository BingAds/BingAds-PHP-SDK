<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves specified AudienceGroups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getaudiencegroupsbyids?view=bingads-13 GetAudienceGroupsByIds Request Object
     * 
     * @uses AudienceGroupAdditionalField
     * @used-by BingAdsCampaignManagementService::GetAudienceGroupsByIds
     */
    final class GetAudienceGroupsByIdsRequest
    {
        /**
         * Array of audience group ids to get.
         * @var integer[]
         */
        public $AudienceGroupIds;

        /**
         * The list of additional properties to include with each returned audience group.
         * @var AudienceGroupAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
