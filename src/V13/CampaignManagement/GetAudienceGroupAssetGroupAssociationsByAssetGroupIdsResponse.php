<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves the specified AudienceGroupAssetGroupAssociations by asset group IDs.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getaudiencegroupassetgroupassociationsbyassetgroupids?view=bingads-13 GetAudienceGroupAssetGroupAssociationsByAssetGroupIds Response Object
     * 
     * @uses AudienceGroupAssetGroupAssociation
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAudienceGroupAssetGroupAssociationsByAssetGroupIds
     */
    final class GetAudienceGroupAssetGroupAssociationsByAssetGroupIdsResponse
    {
        /**
         * The list of Audience Group associations.
         * @var AudienceGroupAssetGroupAssociation[]
         */
        public $AudienceGroupAssetGroupAssociations;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
