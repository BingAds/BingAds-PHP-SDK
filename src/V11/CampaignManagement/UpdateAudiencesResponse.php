<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates the specified audiences.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updateaudiences?version=11 UpdateAudiences Response Object
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
