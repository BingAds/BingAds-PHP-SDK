<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes one or more AudienceGroupAssetGroupAssociations.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteaudiencegroupassetgroupassociations?view=bingads-13 DeleteAudienceGroupAssetGroupAssociations Request Object
     * 
     * @uses AudienceGroupAssetGroupAssociation
     * @used-by BingAdsCampaignManagementService::DeleteAudienceGroupAssetGroupAssociations
     */
    final class DeleteAudienceGroupAssetGroupAssociationsRequest
    {
        /**
         * The list of Audience Group associations to be deleted.
         * @var AudienceGroupAssetGroupAssociation[]
         */
        public $AudienceGroupAssetGroupAssociations;
    }
}
