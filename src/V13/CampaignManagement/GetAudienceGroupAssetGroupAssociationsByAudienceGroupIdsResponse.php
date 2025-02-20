<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves the specified AudienceGroupAssetGroupAssociations by audience group IDs.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getaudiencegroupassetgroupassociationsbyaudiencegroupids?view=bingads-13 GetAudienceGroupAssetGroupAssociationsByAudienceGroupIds Response Object
     * 
     * @uses AudienceGroupAssetGroupAssociation
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAudienceGroupAssetGroupAssociationsByAudienceGroupIds
     */
    final class GetAudienceGroupAssetGroupAssociationsByAudienceGroupIdsResponse
    {
        /**
         * The list of Audience Group associations to get.
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
