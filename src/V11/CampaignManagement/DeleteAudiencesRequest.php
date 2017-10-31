<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes the specified audiences.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deleteaudiences?view=bingads-11 DeleteAudiences Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteAudiences
     */
    final class DeleteAudiencesRequest
    {
        /**
         * The IDs of the audiences to delete.
         * @var integer[]
         */
        public $AudienceIds;
    }
}
