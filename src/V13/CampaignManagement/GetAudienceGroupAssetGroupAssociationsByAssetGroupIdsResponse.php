<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getaudiencegroupassetgroupassociationsbyassetgroupids?view=bingads-13 GetAudienceGroupAssetGroupAssociationsByAssetGroupIds Response Object
     * 
     * @uses AudienceGroupAssetGroupAssociation
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAudienceGroupAssetGroupAssociationsByAssetGroupIds
     */
    final class GetAudienceGroupAssetGroupAssociationsByAssetGroupIdsResponse
    {
        /**
         * Reserved.
         * @var AudienceGroupAssetGroupAssociation[]
         */
        public $AudienceGroupAssetGroupAssociations;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
