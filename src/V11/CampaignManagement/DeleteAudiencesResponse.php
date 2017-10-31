<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes the specified audiences.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deleteaudiences?view=bingads-11 DeleteAudiences Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAudiences
     */
    final class DeleteAudiencesResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
