<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes the specified audiences.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteaudiences?view=bingads-13 DeleteAudiences Request Object
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
