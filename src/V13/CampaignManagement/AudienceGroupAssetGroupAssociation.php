<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/audiencegroupassetgroupassociation?view=bingads-13 AudienceGroupAssetGroupAssociation Data Object
     * 
     * @used-by DeleteAudienceGroupAssetGroupAssociationsRequest
     * @used-by GetAudienceGroupAssetGroupAssociationsByAssetGroupIdsResponse
     * @used-by GetAudienceGroupAssetGroupAssociationsByAudienceGroupIdsResponse
     * @used-by SetAudienceGroupAssetGroupAssociationsRequest
     */
    final class AudienceGroupAssetGroupAssociation
    {
        /**
         * Reserved.
         * @var integer
         */
        public $AssetGroupId;

        /**
         * Reserved.
         * @var integer
         */
        public $AudienceGroupId;
    }

}
