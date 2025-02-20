<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an AudienceGroupAssetGroupAssociation data object.
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
         * The ID of the asset group.
         * @var integer
         */
        public $AssetGroupId;

        /**
         * The ID of the audience group.
         * @var integer
         */
        public $AudienceGroupId;
    }

}
