<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes one or more AudienceGroupAssetGroupAssociations.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteaudiencegroupassetgroupassociations?view=bingads-13 DeleteAudienceGroupAssetGroupAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAudienceGroupAssetGroupAssociations
     */
    final class DeleteAudienceGroupAssetGroupAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
