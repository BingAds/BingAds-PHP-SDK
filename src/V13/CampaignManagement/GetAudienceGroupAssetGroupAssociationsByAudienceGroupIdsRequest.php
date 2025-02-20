<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves the specified AudienceGroupAssetGroupAssociations by audience group IDs.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getaudiencegroupassetgroupassociationsbyaudiencegroupids?view=bingads-13 GetAudienceGroupAssetGroupAssociationsByAudienceGroupIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetAudienceGroupAssetGroupAssociationsByAudienceGroupIds
     */
    final class GetAudienceGroupAssetGroupAssociationsByAudienceGroupIdsRequest
    {
        /**
         * The list of AudienceGroup ids used to fetch the associations.
         * @var integer[]
         */
        public $AudienceGroupIds;
    }
}
