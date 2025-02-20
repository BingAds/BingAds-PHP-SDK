<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Sets AudienceGroupAssetGroupAssociations.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/setaudiencegroupassetgroupassociations?view=bingads-13 SetAudienceGroupAssetGroupAssociations Request Object
     * 
     * @uses AudienceGroupAssetGroupAssociation
     * @used-by BingAdsCampaignManagementService::SetAudienceGroupAssetGroupAssociations
     */
    final class SetAudienceGroupAssetGroupAssociationsRequest
    {
        /**
         * The list of Audience Group associations to set.
         * @var AudienceGroupAssetGroupAssociation[]
         */
        public $AudienceGroupAssetGroupAssociations;
    }
}
