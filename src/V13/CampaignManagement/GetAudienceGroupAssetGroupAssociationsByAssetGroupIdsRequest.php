<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves the specified AudienceGroupAssetGroupAssociations by asset group IDs.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getaudiencegroupassetgroupassociationsbyassetgroupids?view=bingads-13 GetAudienceGroupAssetGroupAssociationsByAssetGroupIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetAudienceGroupAssetGroupAssociationsByAssetGroupIds
     */
    final class GetAudienceGroupAssetGroupAssociationsByAssetGroupIdsRequest
    {
        /**
         * The list of AssetGroup ids used to fetch the associations.
         * @var integer[]
         */
        public $AssetGroupIds;
    }
}
