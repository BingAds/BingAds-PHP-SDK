<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves specified AudienceGroups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getaudiencegroupsbyids?view=bingads-13 GetAudienceGroupsByIds Response Object
     * 
     * @uses AudienceGroup
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAudienceGroupsByIds
     */
    final class GetAudienceGroupsByIdsResponse
    {
        /**
         * Array of audience groups.
         * @var AudienceGroup[]
         */
        public $AudienceGroups;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
