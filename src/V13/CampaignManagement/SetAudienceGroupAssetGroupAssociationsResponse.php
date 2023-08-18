<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Sets AudienceGroupAssetGroupAssociations.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/setaudiencegroupassetgroupassociations?view=bingads-13 SetAudienceGroupAssetGroupAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::SetAudienceGroupAssetGroupAssociations
     */
    final class SetAudienceGroupAssetGroupAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
