<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the specified audiences.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateaudiences?view=bingads-13 UpdateAudiences Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateAudiences
     */
    final class UpdateAudiencesResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
