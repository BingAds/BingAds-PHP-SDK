<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getaudiencegroupassetgroupassociationsbyaudiencegroupids?view=bingads-13 GetAudienceGroupAssetGroupAssociationsByAudienceGroupIds Response Object
     * 
     * @uses AudienceGroupAssetGroupAssociation
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAudienceGroupAssetGroupAssociationsByAudienceGroupIds
     */
    final class GetAudienceGroupAssetGroupAssociationsByAudienceGroupIdsResponse
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
